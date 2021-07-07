<?php

session_start();
$_SESSION['page'] = "bussiness.php";
$_SESSION['topic'] = "business";

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
    <link rel="stylesheet" href="bussiness.css?v=<?php echo time(); ?>" >
    
    <title>Bussiness</title>
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
        <h1>Bussiness</h1>
    </div>
    <div class="about">
        <div class="content">
            <div class="title">Solve all your Business  disputes from our great consultants.</div>
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
                <summary> [1]. Should I form my company as C corporation, an S corporation, an LLC, a partnership, or a sole proprietorship?</summary>
                <p>Start it as an S corporation, unless you have to issue both common stock and preferred stock; in that case start it as a C corporation. And an S corporation can easily be converted later into a C corporation. LLCs are popular but can get overly complicated. Partnerships and sole proprietorships are to be avoided because of the potential personal liability to the owners of the business.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [2]. Where should I incorporate my business?</summary>
                <p>The standard answer to this is Delaware because of its well-developed corporate law. However, my answer is that it should be the state where the business is located, as this will save you some fees and complexities. You can always reincorporate later in Delaware.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [3]. How much should I capitalize my business with at the beginning?</summary>
                <p>As much as you can reasonably afford, and in an amount to at least carry you for 6-9 months with no income. What you will find is that it always takes you longer to get revenues, and that you will experience more expenses than you anticipated.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [4]. How likely will it be that I can get venture capital financing?</summary>
                <p>Extremely unlikely. Get a product done, gain some traction, get a good management team, and then consider getting venture financing. You may need to start out getting financing from family, friends, or angel investors.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [5]. Should I require prospective angel or venture capital investors to sign a Non Disclosure Agreement (NDA) so they don't steal my idea?</summary>
                <p>No, don't waste your time. It will be counterproductive and slow down your fundraising. And many investors will refuse anyway. It's hard enough to get a meeting with an investor-don't put another roadblock in the way. For the most part it's not the idea that is important; it's the implementation of the idea and the entrepreneurs behind it.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [6]. How much dilution in share ownership of my company should I give up to investors in my business?</summary>
                <p>Whatever amount gets you funded. Don't try to over-optimize on ownership. Get cash to grow your business and make your investors happy as well.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [7]. How big should a stock option pool for employees be?</summary>
                <p>15-20%. Standard vesting for options is 4 years, with a one-year "cliff vesting" and monthly vesting after that. "Cliff vesting" in this context means the employee must be employed by the company for a minimum of one year before the employee earns any of the options.</p>
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