<?php
session_start();
$_SESSION['email'] = 0;
$_SESSION['not_send'] = 0;
$_SESSION['send'] = 0;

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $_SESSION['email'] = 1;
    $flag = 1;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $_SESSION['email'] = 0;
      $flag = 0;
    }

    if($flag==1){
        header("location: contact.php");
        exit();
    }

    
    $user_message = " Comment of a User, $name , $email ,  message: $message ";
    $visitor_email = "girianishpramodbhai@gmail.com";
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
        $mail->AddAddress($visitor_email);
        $mail->SetFrom($visitor_email);
       // $mail->AddReplyTo($visitor_email,$name);
        $mail->Subject  = "Comments for Secret Friend";
        $mail->Body     = $user_message;
        $mail->WordWrap = 50;
        if(!$mail->Send()) {
        $_SESSION['not_send'] = 1;
       // echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
        $_SESSION['send'] = 1;
        }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>" >
    
    <title>Contact</title>
</head>

<body>
<nav class="navbar">
        <div class="content">
            <div class="logo">
                <a href="#">Secret Friend</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fa fa-times" aria-hidden="true"></i>

                </div>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li id="d">Services
                    <ul>
                        <li><a href="gadget.php">Electronics Gadgets</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="bussiness.php">Bussiness</a></li>
                        <li><a href="legal.php">Legal conflicts</a></li>
                        <li><a href="family.php">Family Dilemma</a></li>
                        <li><a href="diet.php">Psychology & Diet</a></li>
                        <li><a href="other.php">Other</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="myprofile.php">My Profile</a></li>
                <li><a href="myquestion.php">MyQuestions</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
            <div class="icon menu-btn">
                <i id="ic" class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </nav>

    

    <div class="banner">
        <img src="logo1.png">
    </div>
    
    <div class="about">
        <div class="content">
            <div class="title">Contact details</div>
        </div>
    </div>
    <div class="c1">
        <div class="container">
            <div class="box">
                <div class="imgbx">
                    <img src="call.png">
                </div>
                <div class="content2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h3>Mobile no.</h3>
                    <h4><strong>Anish Giri : </strong>9313861094</h4>
                    <h4><strong>Dev Oza : </strong>7201066052</h4>
                    <h4><strong>Pratham Tailor : </strong>9265045066</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgbx">
                    <img src="email.png">
                </div>
                <div class="content2">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h3>E-mail</h3>
                    <h4><strong>Anish Giri : </strong>girianishbhai@gmail.com</h4>
                    <h4><strong>Dev Oza : </strong> devoza121220@gmail.com</h4>
                    <h4><strong>Pratham Tailor : </strong>prathamtailor0809@gmail.com</h4>
                </div>            
            </div>
            <div class="box">
                <div class="imgbx">
                    <img src="location.png">
                </div>
                <div class="content2">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3>Address of Head Quarters</h3>
                    <h4>LS Boys Hostel,Uttarsanda road,opposite D-Mart,Nadiad,Gujarat.</h4>
                </div>           
            </div>
        </div>
    </div>

    


    <div class="border"></div>
        <h1>Please Share Your Thoughts With Us...</h1>    
    <div class="border" id="alert"></div>
    <?php
    if($_SESSION['send'] == 1){
    ?>
    <div class="success">
    
      <strong> Thanks for your valuable message !!</strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['send']);
  }
  if($_SESSION['not_send'] == 1){
    ?>
    <div class="alert">
    
      <strong> Something went wrong, Please try again... </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['not_send']);
  }

  if($_SESSION['email'] == 1){
    ?>
    <div class="alert">
    
      <strong> Invalid email, Please try again... </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['email']);
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

    
    <div class="contact-section">
        <form action="" method="POST" class="contact-form">
            
            <h1>Feel free to contact us</h1>
            <input type="text" name="name" class="contact-form-text" placeholder="Your Name" required>
            <input type="email" name="email" id="email" class="contact-form-text" placeholder="Your e-mail address" required>
            <input type="text" name="message" id="message" class="contact-form-text" placeholder="Your Message..." required>
            <div class="btn">
                <input type="submit" value="Send" name="submit">
            </div>
        </form>
    </div>
    
    
    <footer>
        <div class="logo2">
            <img src="logo1.png" class="i1">
            <h2>Secret Friend</h2>
        </div>
        <div class="button">
            <a href="contact.php">Contact</a>
            <a href="about.html">About</a>
        </div>
        <div class="last">
            <p>Created by team | <i class="fa fa-copyright" aria-hidden="true"></i> 2020 All rights reserved</p>
            <p>Privacy Policy</p>
        </div>
    </footer>
    
    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = () => {
            navbar.classList.add("show");
            menuBtn.classList.add("hide");
            body.classList.add("disabled");
        }
        cancelBtn.onclick = () => {
            body.classList.remove("disabled");
            navbar.classList.remove("show");
            menuBtn.classList.remove("hide");
        }
        window.onscroll = () => {
            this.scrollY > 100 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
    </script>

</body>

</html>