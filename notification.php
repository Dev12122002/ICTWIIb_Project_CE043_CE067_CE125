<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  body{
        background: url(Consultancy-Quark.jpg) no-repeat right center fixed;
        -webkit-background-size: cover;
        -moz-background-size:cover;
        -o-background-size: cover;
        background-size: cover;
        
    }
    h2{
      display: block;
      background:white;
      color:red;
      text-align: center;
      font-size: 200%;
      margin-top: 15%;
      margin-left: 22%;
      width: 50%;
      height: 80px;
      padding: 5%;
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php

require_once "config.php";
session_start();
$username = "";
$email = "";
$name = "";
$password = "";
$age = "";
$occupation = "";
$country = "";
$state = "";
if( isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $flag = 0;
    $flag1 = 0;

    $pattern = "/[\@\!\#\$\%\^\&\*\(\)\<\>\?\/\}\{\~\:\|]/";
    $name_error = preg_match($pattern, $name);
    $username_error = preg_match($pattern, $username);
    $occupation_error = preg_match($pattern, $occupation);
    $country_error = preg_match($pattern,$country);
    $state_error = preg_match($pattern,$state);

    if( $username_error || $name_error || $occupation_error || $country_error || $state_error){
       $_SESSION['special_char'] = 1;
       $flag1 = 1;
    }
    
    $_SESSION['email'] = 1;
    $flag = 1;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      unset($_SESSION['email']);
      $flag = 0;
    }
    
    $patternpwd1 = "/[\@\_\!\#\$\%\^\&\*\(\)\<\>\?\/\}\{\~\:\|]/";
      $pwd_error1 = preg_match($patternpwd1, $password);
    $patternpwd2 = "/[a-z]/";
      $pwd_error2 = preg_match($patternpwd2, $password);
    $patternpwd3 = "/[A-Z]/";
      $pwd_error3 = preg_match($patternpwd3, $password) ; 
    $patternpwd4 = "/[0-9]/";
      $pwd_error4 = preg_match($patternpwd4, $password) ; 
    if( !($pwd_error1 && $pwd_error2 && $pwd_error3 && $pwd_error4)){
      $_SESSION['password'] = 1;
      $flag = 1;
    } 
    
    if(($flag == 1)||($flag1 == 1)){
        header("location: registration.php");
        exit();
    }

    $sql_u = "SELECT * FROM userinfo WHERE username='$username'";
  	$sql_e = "SELECT * FROM userinfo WHERE email='$email'"; 
  	$res_u = mysqli_query($link, $sql_u);
  	$res_e = mysqli_query($link, $sql_e);

      if (mysqli_num_rows($res_u) > 0) {
  	    ?> <h2>Sorry... username already taken !!<br> <a href="registration.php">BACK</a></h2><br><?php	
  	}else if(mysqli_num_rows($res_e) > 0){
  	    ?> <h2> Sorry... email already taken !!<br>  <a href="registration.php">BACK</a></h2> <?php 
      }else{
          
          $sql = "INSERT INTO `userinfo` (name, username, password, gender, email, age, occupation, country, state) VALUES (?,?,?,?,?,?,?,?,?)";
    
          if($stmt = mysqli_prepare($link,$sql)){

           mysqli_stmt_bind_param($stmt,'sssssisss',$param_name, $param_username, $param_password, $param_gender, $param_email, $param_age, $param_occupation, $param_country, $param_state);

           $param_name = $_POST["name"];
           $param_username = $_POST["username"];
           $param_password = $_POST["password"];
           $param_gender = $_POST["gender"];
           $param_email = $_POST["email"];
           $param_age = $_POST["age"];
           $param_occupation = $_POST["occupation"];
           $param_country = $_POST["country"];
           $param_state = $_POST["state"];
     
      
           $_SESSION['email_id'] = $_POST['email'];
           $_SESSION['pwd_id'] = $_POST['password'];
         
      if( !mysqli_stmt_execute($stmt)){

         ?>

         
          <h2> SOMETHING WENT WRONG !! <br>
         <a href="registration.php">BACK</a> </h2>
         
         <?php
         exit();
      }
      ?>

      <div class="success">
      <h2>You are register successfully !!<br>
      <a href="login.php">Click here </a> </h2>
      </div>
      <?php

    }

    }
}
mysqli_close($link);
?>
</body>
</html>
