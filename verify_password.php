<?php

session_start();
require_once 'config.php';
$_SESSION['not_match'] = "";
$username = $_SESSION['username'];

if(isset($_POST['submit']))
{
    
    $result = mysqli_query($link,"SELECT * FROM userinfo where username='" . $username . "'");
    $row = mysqli_fetch_assoc($result);
    $pwd = $row['password'];

    if( $pwd == $_POST['pwd'] ){
        header("location:update.php");
    }
    else{
        $_SESSION['not_match'] = 1;
    }

}    

?>

<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" href="verify_password.css?v=<?php echo time(); ?>" >
<title>Verify User </title>
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
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </nav>

<div class="box">
<div class="logo5">
<img src="logo1.png" alt="Logo" width="300" height="300"></img>
</div>

<?php
if($_SESSION['not_match'] == 1){
    ?>
    <div class="noti1">
      <center><h2> Invalid Password !! </h2> 
              <h3> Please click on "Forgot Password", if you don't remember it... <h3>
     </center>            
    </div>
    <?php
    unset($_SESSION['not_match']);
  }
?>
<h1>To continue, first verify it's you..<h1>
<form action='' method='post'>

<div class="form-group">
        <label for="inputEmail0">Enter Your Password </label>
      </div>

      <div class="form-control">
        <input type="text" name="pwd" id="inputEmail0" placeholder="Enter Your Password" minlength="5"
         required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>

      
             <p>Don't remember password? </p>
            <a href="forgot_password.php">Forgot Password</a>
          
      
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

</body> 
</html>