<?php

session_start();
$_SESSION['page'] = "legal.php";
$_SESSION['topic'] = "legal";

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
    <link rel="stylesheet" href="legal.css?v=<?php echo time(); ?>" >
    
    <title>Legal Conflicts</title>
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
        <h1>Legal Conflicts</h1>
    </div>
    <div class="about">
        <div class="content">
            <div class="title">Solve your legal conflict from our experienced Legal Advisors.</div>
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
                <summary> [1]. Are court hearings open to the public? Are court documents accessible by the public?</summary>
                <p>a. Court hearings are open to the public - India has an open court system till the court proceedings are converted into an 'in-camera trail'. Where there is an open court hearing, litigants are entitled to know the progress in their case. The concept of access to justice provides that though a litigant is not in court, they are able to know what is happening in their case inside the court. Barring few exceptions like hearings in a rape case, the courts are open to the public for all hearing and the Supreme Court in order to facilitate this concept has even started to frame appropriate guidelines for allowing live streaming of the proceedings so that the citizens have the right to information and matters of constitutional and national importance can be live-streamed for awareness
                </p>
                <p>b. Court judgments are public records but not court documents. If a case is heard by a court of India, no one can argue that the opinion should not be published and view able by all, unless the court itself expressly says it cannot be published or a law says it cannot. The decisions of the Supreme Court are the law of the land, and all citizens can read their decisions. Not just the Supreme Court, courts today are publishing their judgments and orders on the Internet. The Copyright Act s 52(1)(q)(iv) states that publication of court judgments does not constitute an infringement of copyright</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [2].  Do all lawyers have the right to appear in court and conduct proceedings on behalf of their client?If not, how is the legal profession structured?</summary>
                <p>A lawyer can appear in any matter on behalf of its client provided such lawyer has filed a Vakalatnama or memo for the same client before the Court of Law. A Vakalatnama or memo is a privileged document signed by the client authorizing only one lawyer or two-lawyers (in case of a firm) to represent his interest before the Hon'ble Court. In the case of Uday Shankar Triyar vs Ram Kalewar Prasad Singh & Anr AIR 2006 SC 269, the Supreme court held that Vakalatnama creates the special relationship between the lawyer and the client. It regulates and governs the extent of delegation of authority to the pleader and the terms and conditions governing such delegation. It should, therefore, be properly filled/attested/accepted with care and caution. Any other lawyer will not appear in any matter where another advocate has filed a Vakalatnama or memo for the same party.</p>
                <p>In such a case, a lawyer who is not able to present the consent of the advocate who has filed the matter for the same party must apply to the court to be allowed to appear on behalf of the client. He shall in such application mention the reason as to why he could not obtain such consent. He shall appear only after obtaining the permission of the Court.</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [3]. Are there any pre-action procedures with which the parties must comply before commencing proceedings?</summary>
                <p>As soon as a dispute is imminent, parties need to consider a number of factors which can be regarded as pre-action procedures:
                </p>
                <p>a. One is to issue a forewarning to the other side by issuing a Legal Notice which specifies the cause of action, the quantum of loss if any and intimation to the other party of the alleged wrong-doing. The said Legal Notice which is usually issued through a Lawyer should carry a diligent time-line such that the other party can peruse the same and take corrective measures if any within the said period. The Notice shall also state that in case of no rebuttal from the other party, a suit shall be instituted in the Court of law</p>
                <p>b. The other factor is to consider if at all, there is a reasonable cause of action because the court will strike out a claim which fails to disclose a reasonable cause of action</p>
                <p>c. The party instituting civil proceedings shall also consider who the proper defendant is and whether it is worth pursuing the defendant at all by checking their financial means. If the defendant does have assets, it may be relevant if these are located out of the jurisdiction and if so, how easy it will be to enforce judgment against these assets</p>
            </details>
        </div>
        <div class="container">
            <details>
                <summary> [4]. Do parties exchange written evidence prior to trial or is evidence given orally? Do opponents have the right to cross examine a witness?</summary>
                <p>a. The parties to the suit exchange written evidence of their witnesses prior to the commencement of trial. The parties to the suit have to provide a list of witnesses they intend to testify to the Court under the CPC 1908, Ord. XVI Rule 1. The said list of witnesses, if any has to be filed in the Court by the respective parties before the commencement of the hearing of evidence. It is important to note that no party shall be entitled to produce any witness not named in the list of witnesses provided to the Court, without taking permission of the Court in writing and stating the reasons therefore. The evidence of the witness is recorded by way of an affidavit and the party conducts examination in chief of its witness. It is mandatory to supply a copy of examination-in chief to the other party as specified under the CPC Order XVIII, R 4(1)
                </p>
                <p>b. After completion of the examination in chief, the opposite party has the right to cross-examine the witness as per the CPC Order XVIII R 4(2). The cross examination is recorded by the Court or the Commissioner, as the case may be. The party has a right to undertake re-examination after the completion of cross-examination by the other party</p>
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