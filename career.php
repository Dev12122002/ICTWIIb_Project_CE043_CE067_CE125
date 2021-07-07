<?php

session_start();
$_SESSION['page'] = "career.php";
$_SESSION['topic'] = "career";

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

    <link rel="stylesheet" href="career.css?v=<?php echo time(); ?>" >
    <title>Career</title>
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
        <h1>Career</h1>
    </div>
    <div class="about">
        <div class="content">
            <div class="title">Know your Career from great Career Counsellors</div>
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
                <summary> [1]. How to pay for college?</summary>
                <p>We get it, paying for college is one of the first fears to pop into your mind before even enrolling. And while college is notoriously expensive, it's worth the money. So much of your future is influenced by these next four years. You shouldn't have to worry about finances so much that you forget to make the most of the experience itself! Making connections and building your post-graduate résumé should be your priority. The more you get involved in college, the better the value of your school.</p>                
                <p>As you work hard in class, make a point to apply for scholarships & grants. There's no reason not to invest time in looking for free money toward your education, Students all over the nation are taking advantage of scholarships by documenting their activism, community service, and other achievements year round. For help finding scholarships, you can use resources like Scholly or other local listings for rewards in your area.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [2]. What to wear to college?</summary>
                <p>The first day of class is when you make your first impression on both your peers and your professors, so it's no wonder why you might be stressing about how to dress your best. Dress in whatever makes you look well groomed and whatever makes you feel confident. It would be a safe bet to dress in your best casual attire; you might have to walk a lot between classes, so your best outfit might be as simple as a comfortable shirt, jeans, and flats or sneakers.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [3]. Why overseas education is the best option?</summary>
                <p>The global overseas student market has more than doubled since 2000, making it a lucrative and highly competitive battleground for potential recruits. Studying abroad is a great option for a lot of reasons. Skill development, practical exposure, giving equal attention to every student, better facilities, stress free atmosphere, and quality education to name a few, are some of the salient features of the International education system. Working and studying abroad are among some of the most rewarding experiences. You get exposure to a new place, culture, trends, and technology.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [4]. How to get a job in Management?</summary>
                <p>Management jobs are in high demand because it is there in every profession, whether the company is large or small this post is rather a necessity. Mastery in multiple tasking, group coordination, good communication, and appealing personality is the prerequisite to be a good manager. But, it is indeed hard to get the job of a Manager directly, the only way you can become a good manager is by first working under a good manager. So, your target it to first gain at least one year of experience as an assistant/intern/Junior Manager etc.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [5]. Which are the highest paying jobs in India?</summary>
                <p>List of highest paying jobs in India annual package-wise</p>
                <p>1. Management Professionals- Entry level-3L and advanced level 80L</p>
                <p>2. Investment Bankers- Entry level-5L and advanced level 50L</p>
                <p>3. Charted Accountants- Entry level 5L and advanced lever 25L</p>
                <p>4. IT and Software Engineers- Entry level - 4.5L and advanced level 20L 5. Oil and Natural Gas Sector-Entry level-3.5L and advanced level 18L</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [6]. How can I make a career in Design?</summary>
                <p>With an array of options to explore in Design like Fashion, Automobile, Graphics, Furniture, Products, Visual Merchandising, Gemology etc. no wonder it is on the list of top 10 Googled questions on the career. In design, Academic qualifications are not very high and require creativity more than scoring. Thankfully, there are some good design institutes in India that have generated lakhs of talented and extraordinary students in the field.
                </p>
                <p>Based on your choice, interest, and ability you can apply at the following institutes that offer courses in Design
                </p>
                <p>*National Institute of Design</p>
                <p>*National Institute of Fashion technology</p>
                <p>*Pearl Academy of Fashion</p>
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