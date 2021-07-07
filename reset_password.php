<?php
	session_start();
	$_SESSION['password1'] = 0;
	$_SESSION['pwd1'] = 0;
	if(isset($_GET['id'])){
		$_SESSION['id']=$_GET['id'];
	}
	else{
		
		echo " done!!";
			if($_POST['Password']!=$_POST['Confirm_Password']){
				$_SESSION['pwd1'] = 1;
			}
			else{
				$password = $_POST['Password'];
				$patternpwd1 = "/[\@\_\!\#\$\%\^\&\*\(\)\<\>\?\/\}\{\~\:\|]/";
					$pwd_error1 = preg_match($patternpwd1, $password);
				  $patternpwd2 = "/[a-z]/";
					$pwd_error2 = preg_match($patternpwd2, $password);
				  $patternpwd3 = "/[A-Z]/";
					$pwd_error3 = preg_match($patternpwd3, $password) ; 
				  $patternpwd4 = "/[0-9]/";
					$pwd_error4 = preg_match($patternpwd4, $password) ; 
				  if( !($pwd_error1 && $pwd_error2 && $pwd_error3 && $pwd_error4)){
					$_SESSION['password1'] = 1;
				  } 
				if( $_SESSION['password1'] == 0){  
				require_once "config.php";
				$Password = $_POST['Password'];
				$id =  $_SESSION['id'];
				$query = "UPDATE userinfo SET password='$Password' WHERE id = '$id'";
				$result = mysqli_query($link,$query);
				//redirect to log in page 
				header('Location:login.php');
				}
			}
	}
	//mysqli_close($link);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" href="forgot_password.css" />
</head>
<body>

    <div class="box">
    <div class="logo">
    <img src="logo1.png" alt="Logo" width="300" height="300"></img>
    </div>

    <?php
	if($_SESSION['password1'] == 1){
    ?>
    <div class="noti1">
      <h2> Password must contain one Special character one Capital letter, one Small letter and digit from 0-9 </h2> 
	  <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['password1']);
  }
  ?>
  <?php
	if($_SESSION['pwd1'] == 1){
    ?>
    <div class="noti1">
      <h2> Both password should be same...  </h2> 
	  <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['pwd1']);
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

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div>
	<center>
	<h2>Reset your Password</h2>
	<div class="form-control">
        <input type="password" name="Password" id="inputPassword1" placeholder="Enter Your New Password" minlength="6"
          maxlength="12" required>
      </div>
	  <div class="form-control">
        <input type="password" name="Confirm_Password" id="inputPassword1" placeholder="Confirm Your New Password" minlength="6"
          maxlength="12" required>
      </div>
	<button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
	</center>
	</div>
	</form>
</body>
</html>