<?php

session_start();
if (isset($_SESSION["username"])) {

    require_once "config.php";
    $username = $_SESSION['username'];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyQuestions</title>
        <link rel="stylesheet" href="myquestion.css?v=<?php echo time(); ?>" >
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <?php
        $sql = "SELECT * FROM questions WHERE username = '$username'";
        $result = mysqli_query($link, $sql);

        if ($result) {
            if ((mysqli_num_rows($result) > 0)) {

        ?>

                <div class="container">
                    <div class="timeline">
                        <ul>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($result)) {
                                $i++;
                                $question = $row['question'];
                                $topic = $row['topic'];
                                $answer = $row['answer'];
                                $id = $row['id'];

                                if (empty($answer)) {
                                    $answer = "You will get your answer soon...";
                                }

                            ?>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">Topic : <?php echo $topic; ?></h3>
                                        <h1><?php echo $i .") ". $question; ?></h1>
                                        <p> <?php echo "Ans : " . $answer; ?> </p>
                                    </div>
                                </li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>

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
                        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
                    }
                </script>


    </body>

    </html>

<?php

            } else {
                echo "You have not asked any questions yet";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    } else {
        echo "please login first";
    }

?>

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