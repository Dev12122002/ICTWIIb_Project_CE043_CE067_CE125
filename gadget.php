<?php

session_start();
$_SESSION['topic'] = "gadget";
$_SESSION['page'] = "gadget.php";
//$_SESSION['send'] = "";
//$_SESSION['not_send'] = "";
//$_SESSION['submit_error'] = "";


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

    <link rel="stylesheet" href="gadget.css?v=<?php echo time(); ?>" >
    <title>Electronics Gadgets</title>
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
            <div id="ic" class="icon menu-btn">
                <i class="fa fa-bars" ></i>
            </div>
        </div>
    </nav>

    <div class="banner">
        <h1>Electronics & Gadgets</h1>
    </div>
    <div class="about">
        <div class="content">
            <div class="title">Ask your all problems of Gadget here only.</div>
        </div>
    </div>


    <?php
    if(isset($_SESSION['sub_send']) ){
    ?>
    <div class="success">
    
      <strong> We have received your Question, Please check your "Email" or "My Question" page for Answers Soon... !!</strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['sub_send']);
  }
  if(isset($_SESSION['sub_not_send'] )){
    ?>
    <div class="alert">
    
      <strong> Something went wrong, Please try again... </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['sub_not_send']);
  }

  if(isset($_SESSION['sub_submit_error'] )){
    ?>
    <div class="alert">
    
      <strong> Something went wrong, Please try again... </strong> 
      <span class="closebtn">&times;</span>
    </div>
    <?php
    unset($_SESSION['sub_submit_error']);
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



    <form action="submission.php" method="POST">
    <div class="inputBox w100">
        <textarea name="question" required></textarea>
        <span>Write your Question Here......</span>
    </div>
    <div class="button">
        <center><input type="submit" name="submit" value="Submit"></center>
    </div>
     </form>
    <div class="que">
        <h2>frequently Asked Question</h2>
        <div class="container">
            <details>
                <summary> [1]. I lost a file on my computer.Where did it go?</summary>
                <p>First, check your Recycle bin to see if you accidentally deleted a file. If not, check if you saved the file in a different place. In general, having well-organised files & folders will help you find things more quickly and easily. If it's not where you expect, try opening the program you used to create the file and check recently opened file.</p>
                
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [2]. Why does my laptop freeze when playing a video game?</summary>
                <p>If your laptop or desktop computer freezes or hangs while playing a video game,the cause may be heat-related.If your CPU or GPU overheats,the computer will stop functioning to protect the hardware from physical damage.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [3]. Why does my laptop freeze when playing a video game?</summary>
                <p>If your laptop or desktop computer freezes or hangs while playing a video game, the cause may be heat-related. If your CPU or GPU overheats, the computer will stop functioning to protect the hardware from physical damage.
                </p>
                <p>When a computer overheats, it may not produce an error message. The screen may simply become frozen, meaning you can't move the cursor, or it may turn black and the computer will shut down.</p>
                <p>Video games and other graphics-intensive applications are taxing on both central processing unit (CPU) and graphics processor (GPU). While a computer's ventilation and internal cooling system should prevent the components from overheating, it can still en.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [4]. What to do when your laptop doesn't hold a charge</summary>  
                <p>1. If your battery's charge was getting pretty short before it died, the best choice is to simply buy a new battery. You can either buy a replacement from the laptop manufacturer or buy a third party battery that matches the exact specifications of the original battery.
                </p>
                <p>2. If your computer stopped holding a charge unexpectedly, it may be worth bringing your computer into a repair center. Then you can have a technician check if the problem is with the battery or the laptop itself before buying a new battery.</p>
                <p>Important: Many laptops and tablets do not have removable batteries. If your battery is not user servicable, you will have to bring the device to an authorized technician to determine why it is not holding a charge.</p>

            </details>
        </div>
        <div class="container">
            <details>
                <summary> [5]. Need 12 Hours to be Charged Fully?</summary>
                <p>When buying phones, many people are told to drain the battery and then charge for 12 hours at the first time you use the phone. In fact, this theory is applied to nickel battery which was used in android phones years ago. The memory phenomenon of nickel battery is the reason why you need to drain the battery and fully charge your phone for 12 hours. However, now lithium battery has already replaced nickel battery and been applied in Android phones for a long time. Lithium battery has no memory phenomenon and you just need to charge your phone normally.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [6].  Do I Need to Install Power-saving Apps?</summary>
                <p>Many people will install some power-saving apps after buying android phones. In fact, these apps save power by forcing closing applications nning backstage, slowing down CPU, turning off internet and so on. Besides, the power-saving app will start itself frequently when the phone battery is enough to control other running application, which will burden phone operation and lead to more loss of power. But it will lower brightness, turn off apps running in the background and turn off Internet when the phone battery is not enough, which indeed play a role in saving power. Anyway, turn off applications you don't need to use at the moment is the best way to save battery.</p>
            </details>
        </div>
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
    
    <!-- <section>
        <div class="container">
            <div class="content2">

                <div class="content2-item" id="question1">
                    <a class="content2-link" href="#question1">
                        [1]. I lost a file on my computer.Where did it go?
                        <i class="fa fa-plus" id="plus" aria-hidden="true"></i>
                        <i class="fa fa-minus" id="minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>First, check your Recycle bin to see if you accidentally deleted a file. If not, check if you saved the file in a different place. In general, having well-organised files & folders will help you find things more quickly and easily. If it's not where you expect, try opening the program you used to create the file and check recently opened file.</p>
                    </div>
                </div>
                
                <div class="content2-item" id="question2">
                    <a class="content2-link" href="#question2">
                        [2]. Why is my computer so slow?
                        <i class="fa fa-plus" id="plus" aria-hidden="true"></i>
                        <i class="fa fa-minus" id="minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>First, check your Recycle bin to see if you accidentally deleted a file. If not, check if you saved the file in a different place. In general, having well-organised files & folders will help you find things more quickly and easily. If it's not where you expect, try opening the program you used to create the file and check recently opened file.</p>
                    </div>
                </div> 

            </div>
        </div>
    </section> -->
    
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
            this.scrollY > -2 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
    </script>

</body>

</html>