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
    
    if(empty($email)){
      $email = $_SESSION['email_id'];
    }
    $_SESSION['u_email'] = 1;
    $flag = 1;
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      unset($_SESSION['u_email']);
      $flag = 0;
    }

    if(empty($password)){
      $password = $_SESSION['pwd_id'];
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
        header("location: update.php");
        exit();
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql_u = "SELECT * FROM userinfo WHERE username='$username'";
  	$sql_e = "SELECT * FROM userinfo WHERE email='$email'"; 
  	$res_u = mysqli_query($link, $sql_u);
  	$res_e = mysqli_query($link, $sql_e);

      if (mysqli_num_rows($res_u) > 0) {
  	    $_SESSION['user_match'] = 1;
  	}else if(mysqli_num_rows($res_e) > 0){
  	    $_SESSION['email_match'] = 1;
      }else{
          
        $result = mysqli_query($link,"SELECT * FROM userinfo where username='" . $_SESSION['username'] . "'");
        $row = mysqli_fetch_assoc($result);

        if(empty($name)){
          $name = $row['name'];
        }
        if(empty($username)){
          $username = $row['username'];
        }
        if(empty($password)){
          $password = $row['password'];
        }
        if(empty($email)){
          $email = $row['email'];
        }
        if(empty($age)){
          $age = $row['age'];
        }
        if(empty($gender)){
          $gender = $row['gender'];
        }
        if(empty($occupation)){
          $occupation = $row['occupation'];
        }
        if(empty($country)){
          $country = $row['country'];
        }
        if(empty($state)){
          $state = $row['state'];
        }

        $result = mysqli_query($link,"UPDATE `userinfo` SET `name` = '".$name."', `username` = '".$username."', `password` = '".$password."', `gender` = '".$gender."', `email` = '".$email."', `age` = '".$age."', `occupation` = '".$occupation."', `country` = '".$country."', `state` = '".$state."' WHERE `userinfo`.`username` = '".$_SESSION['username']." '");

        $_SESSION['username'] = $username;
        if($result){
          
          header("location:myprofile.php");
        }
        else{
          ?> <h2>Sorry... Please try again !!<br></h2><br><?php
        }
      }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Detail</title>
  <link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>" >
  <link rel="stylesheet" href="alert.css?v=<?php echo time(); ?>" >
  
  

</head>

<body>

<?php
if(isset($_SESSION['special_char'])){
      ?>

       <div class="alert">
          <span class="closebtn">&times;</span>  
          <strong><?php echo "Please do not use Special characters in Name, Username, Occupation, Country, State !!"; ?></strong> 
     </div>

      <?php
        
        unset($_SESSION['special_char']);
      }
     
  ?>
  <br>
  <?php


if(isset($_SESSION['email_match'])){
      ?>

       <div class="alert">
          <span class="closebtn">&times;</span>  
          <strong><?php echo "Email Address already used..."; ?></strong> 
     </div>

      <?php
        
        unset($_SESSION['email_match']);
      }
     
  ?>
  <br>
<?php
if(isset($_SESSION['user_match'])){
      ?>

       <div class="alert">
          <span class="closebtn">&times;</span>  
          <strong><?php echo "Username already taken..."; ?></strong> 
     </div>

      <?php
        
        unset($_SESSION['user_match']);
      }
     
  ?>
  <br>
<?php
if(isset($_SESSION['u_email'])){
  ?>

    <div class="alert">
       <span class="closebtn">&times;</span>  
       <strong><?php echo "Please use correct E-mail address !!"; ?></strong> 
    </div>

  <?php
  
  unset($_SESSION['u_email']);
}
?>
<br>
<?php

if(isset($_SESSION['password'])){
  ?>

    <div class="alert">
        <span class="closebtn">&times;</span>  
        <strong><?php echo "Password must contain one Special character, one Capital letter, one Small letter and digit from 0-9 !!"; ?></strong> 
    </div>

  <?php
  
  unset($_SESSION['password']);
}

?>
<br>
  
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
  

  
  <div class="container ">

    <h3>Please Edit Your Details</h3>
    

    <form action="" method="post">

      <div class="form-group">
        <label for="inputEmail">Name :</label>
      </div>

      <div class="form-control">
        <input type="text" name="name" id="inputEmail" placeholder="Enter Your New Name" >
      </div>

      <div class="form-group">
        <label for="inputEmail0">Username :</label>
      </div>

      <div class="form-control">
        <input type="text" name="username" id="inputEmail0" placeholder="Enter The New Username" minlength="5"
         >
      </div>

      <div class="form-group">
        <label for="inputPassword1">Password :</label>
      </div>
      
      <div class="form-control">
        <input type="password" name="password" id="inputPassword1" placeholder="Enter The New Password" minlength="6"
          maxlength="12" >
      </div>
      
      <div class="form1-group" style="margin-top:10px;">
        
        <label for="inputEmail2">Gender :</label>&nbsp
        <input type="radio" class="form-control" name="gender" id="inputEmail2" value="male" >
        <label for="inputEmail2">Male</label>&nbsp&nbsp
        <input type="radio" class="form-control" name="gender" id="inputEmail3" value="female" >
        <label for="inputEmail3">Female</label>&nbsp&nbsp
        <input type="radio" class="form-control" name="gender" id="inputEmail4" value="other" >
        <label for="inputEmail4">Other</label>

      </div>

      <div class="form-group" style="margin-top:15px;">
        <label for="inputEmail5">Email :</label>
      </div>
      
      <div class="form-control">
        <input type="email" name="email" id="inputEmail5" placeholder="name@example.com" >
      </div>

      <div class="form-group">
        <label for="inputEmail0">Age :</label>
      </div>
      
      <div class="form-control">
        <input type="number" name="age" id="inputEmail0" placeholder="Enter Your New Age"  >
      </div>
      
      <div class="form-group">
        <label for="inputEmail6">Occupation :</label>
      </div>
      
      <div class="form-control">
        <input type="text" name="occupation" id="inputEmail6" placeholder="Enter Your New Occupation" >
      </div>
      
      <div class="form-group">
        <label for="inputCity">Country :</label>
      </div>
      
      <div class="form-control">
        <input type="text" name="country" id="inputCity" placeholder="Enter Your New Country Name" >
      </div>
      
      <div class="form-group">
        <label for="inputEmail7">State :</label>
      </div>
      
      <div class="form-control">
        <input type="text" name="state" id="inputEmail7" placeholder="Enter Your New State Name" >
      </div>

      <button type="submit" name="register" class="btn btn-primary">Update</button>
      <button type="reset" class="btn btn-primary">Reset</button>
      
    
    </form>
  </div>
</body>

</html>