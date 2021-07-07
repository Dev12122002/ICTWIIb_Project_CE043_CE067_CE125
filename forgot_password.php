<?php
session_start();
include_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
$_SESSION['invalid'] = 0;
  $_SESSION['send1'] = 0;
  $_SESSION['send'] = 0;

if(isset($_POST['submit']))
{
    $user_id1 = $_POST['user_id'];
    $result = mysqli_query($link,"SELECT * FROM userinfo where username='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result); 
	$user_id2=$row['username'];
	$visitor_email=$row['email'];
	$id = $row['id'];
  

	
  if($user_id1==$user_id2) {
  
    $user_message = "Hi, $user_id1. Click http://localhost/secret_friend_group/reset_password.php?id=$id to reset the password";
        $mail = new PHPMailer();
        $mail->IsSMTP();  // telling the class to use SMTP
       // $mail->SMTPDebug = 2;
        $mail->Mailer = "smtp";
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "girianish2711@gmail.com"; // SMTP username
            // $mail->Password = "wxsn gwce rxuy vvmj"; // SMTP password
             $mail->Password = "tzwk yobt znub kcsy"; // SMTP password
      //  $Mail->Priority = 1;
        $mail->AddAddress($visitor_email, $user_id1);
        $mail->SetFrom($visitor_email, $user_id1);
       // $mail->AddReplyTo($visitor_email,$name);
        $mail->Subject  = "Reset Password for Secret Friend";
        $mail->Body     = $user_message;
        $mail->WordWrap = 50;
        if(!$mail->Send()) {
        $_SESSION['send1'] = 1;
       // echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
        $_SESSION['send'] = 1;
        }
       
  }
else{
	$_SESSION['invalid'] = 1;
}
}
//echo phpinfo();
mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="forgot_password.css?v=<?php echo time(); ?>" >
<title>Forgot Password </title>
</head>
<body>

<div class="box">
<div class="logo">
<img src="logo1.png" alt="Logo" width="300" height="300"></img>
</div>

<?php
if(isset($_SESSION['send']) || isset($_SESSION['invalid'])){

  if($_SESSION['send'] == 1){
    ?>
    <div class="noti">
    
      <strong> A link send to your Email, Please click on the link to reset password </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['send']);
  }
  if($_SESSION['send1'] == 1){
    ?>
    <div class="noti1">
    
      <strong> There is some problem, Please try again... </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['send1']);
  }

  if($_SESSION['invalid'] == 1){
    ?>
    <div class="noti1">
    
      <strong> Invalid Username, Please try again... </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['invalid']);
  }
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
<h1>Forgot Password !!<h1>
<form action='' method='post'>

<div class="form-group">
        <label for="inputEmail0">Enter Username </label>
      </div>

      <div class="form-control">
        <input type="text" name="user_id" id="inputEmail0" placeholder="Enter The Username" minlength="5"
         required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
</div>      
</form>
</div>

</body> 
</html>