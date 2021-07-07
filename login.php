<?php

require_once "config.php";
session_start();
$_SESSION['err'] = "";
$_SESSION['submit_error'] = "";
$_SESSION['success'] = "";
if(isset($_POST['submit']))
{   
    
    $username = $_POST['username'];
    $f = substr($username,0,1);
    $user_role = substr($username, 0, 3);

    

    if( $f == '@' ){
        
        $user_id1 = $_POST['username'];
        $result = mysqli_query($link,"SELECT * FROM employee where username='" . $_POST['username'] . "'");
        $row = mysqli_fetch_assoc($result); 
	    $user_id2=$row['username'];
	    $pwd=$row['password'];
        if( ($user_id1 == $user_id2) && ($pwd == $_POST['password'])){
            $_SESSION['username'] = $username;
            $_SESSION["loggedin"] = true;
             if($user_role == '@EG'){
                 header('Location:gadget_ans.php');
             }
             if($user_role == '@EC'){
                 header('Location:career_ans.php');
             }
             if($user_role == '@EB'){
                 header('Location:business_ans.php');
             }
             if($user_role == '@EL'){
                 header('Location:legal_ans.php');
             }
            if($user_role == '@EF'){
                 header('Location:family_ans.php');
            }
            if($user_role == '@ED'){
                  header('Location:diet_ans.php');
            }
            if($user_role == '@EO'){
                  header('Location:other_ans.php');
           }
       }
       else{
        $_SESSION["err"] = "Invalid  Username / Password !!";
       }
    }
    else{
        $user_id1 = $_POST['username'];
        $result = mysqli_query($link,"SELECT * FROM userinfo where username='" . $_POST['username'] . "'");
        $row = mysqli_fetch_assoc($result); 
	    $user_id2=$row['username'];
	    $pwd=$row['password'];
        if( ($user_id1 == $user_id2) && ($pwd == $_POST['password'])){
             $_SESSION['username'] = $username;
             $_SESSION['pwd_id'] = $_POST['password'];
             $_SESSION['email_id'] = $row['email'];
             $_SESSION["loggedin"] = true;
             header('Location:home.html');
        }
        else{
            $_SESSION["err"] = "Invalid  Username / Password !!"; 
        }
    }
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="alert.css">
    <title>Login Page</title>
</head>
<body>


<?php
if( !empty($_SESSION['err'])){
?>
    <div class="alert">
    <span class="closebtn">&times;</span>  
    <strong><?php echo $_SESSION['err']; ?></strong> 
  </div>
    
    <?php
       unset($_SESSION['err']);
}
        
?>


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


<div class="logo">
     <img src="logo1.png" alt="Logo" width="300" height="300"></img>
</div>

<div class="logo1">
    <img src="logo5.png" alt="Logo" width="320" height="300"></img>
 </div>
 
    <form action="" class="box" method="POST">
        <div class="h">
            <h1>Login Form</h1>
        </div>
        <div class="info">
            <div class="u_name">
                <input type="text" name="username" id="username" placeholder="User Name" required>
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
        </div>
        
        <div class="sub">
            <input type="submit" name="submit" id="submit" value="Login">
        </div>
        

        <div class="new">
            <strong>Not yet a member? </strong><br>
            <a href="registration.php">New User</a><br><br>
            <strong>Don't remember password? </strong><br>
            <a href="forgot_password.php">Forgot Password</a>
        </div>
    </form>

</body>
</html>