<?php

session_start();
$_SESSION['page'] = "diet.php";
$_SESSION['topic'] = "diet";

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

    <link rel="stylesheet" href="diet.css?v=<?php echo time(); ?>" >
    <title>Pyschology and Diet</title>
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
        <h1>Psychology And Diet</h1>
    </div>
    <div class="about">
        <div class="content">
            <div class="title">Win your battle with help of renowed Psychologist & Dietician.</div>
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
                <summary> [1]. How to lower blood pressure?</summary>
                <p>Obviously, your primary care physician should discuss with you the ways you can lower your blood pressure, including possible medication and lifestyle modifications that cover healthier eating and regular exercise. The result of lifestyle modifications can lead to fewer or no medications for those with hypertension (high blood pressure) or those who have elevated blood pressure readings and are "pre-hypertensive." The category of high blood pressure, which was updated in 2017, is now 130/80, down from 140/90. This stricter standard, the first major change in blood pressure guidelines in 14 years, means that nearly half of U.S. adults have high blood pressure. The biggest culprit in the American diet when it comes to high blood pressure is sodium, the most common form of which is table salt.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [2]. What causes kidney stones?</summary>
                <p>When there isn't enough water to dilute the uric acid, a component of urine, the urine becomes more acidic. And this can lead to the formation of kidney stones. A leading cause of kidney stones, regardless of type, is dehydration. Anyone who is prone to kidney stones should pay attention to good hydration. The American Urological Association guideline for medical management of kidney stones recommends that patients who form kidney stones should aim to drink more than 2.5 liters of fluid per day.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [3]. How to lower cholesterol?</summary>
                <p>Cholesterol circulates in the blood and can mix with other substances to form a thick, hard deposit on the inside of the arteries. This can narrow the arteries, causing a condition known as atherosclerosis. Nearly one of every three U.S. adults have high levels of "low density lipoprotein cholesterol" (LDL-C), which is considered the bad cholesterol because it contributes to fatty plaque buildups and narrowing of the arteries. To lower your cholesterol, eat a heart healthy diet and get a minimum of 40 minutes of moderate- to vigorous intensity aerobic exercise, three to four times a week. You should also take any prescribed medication exactly as your doctor has instructed.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [4]. What is depression?</summary>
                <p>The easiest way to pinpoint any mental health condition is a collection of symptoms that alters your state of mind and reduces your quality of life. When speaking of depression. it refers to a low mood that is consistent and causes feelings of worthlessness, helplessness, lack of interest in sex drive or even life for that matter. This mood disorder eventually impacts your functionality, your ability to socialise and connect with the world. Unfortunately, things are likely to get worse from there on for a person struggling with it. After you isolate yourself, you're at risk of self-harm or suicidal thoughts. If you feel like your mood is deteriorating consistently for a month, then you must go for a checkup.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [5]. What does an anxiety attack feel like?</summary>
                <p>People often use the terms panic attack and anxiety.Attack interchangeably, but there's a difference between the two. A panic attack occurs out of nowhere it could take place even while sipping a cup of coffee. In contrast, an anxiety attack ensues when you're triggered by a specific thing. For example, public speaking makes you anxious. So, when you have to do it, you might find your palms sweaty, feel disoriented, have difficulty in breathing, and experience an increased heart rate.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [6]. What are the symptoms of depression in men?</summary>
                <p>The symptoms are across gender, but the manifestations of the symptoms may have some gender-based or cultural implications. For example, if a woman is not able to focus at work, she may write it off. On the other hand, for a man, it may be a serious cause of distress. Of course, this can vary from person to person. Other signs of depression in men include sleep disturbances, weight gain or loss, excessive irritability or intolerance and anger.</p>
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