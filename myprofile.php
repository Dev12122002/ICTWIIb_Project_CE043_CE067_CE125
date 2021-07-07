<?php

session_start();
$name = "";
$username = "";
$password = "";
$gender = "";
$email = "";
$age = "";
$occupation = "";
$country = "";
$state = "";

if (isset($_SESSION["username"])) {
    require_once "config.php";

    //$sql = "SELECT name, username, password, gender, email, age, occupation, country, state FROM userinfo WHERE username = ?";
    $sql = "SELECT * FROM userinfo WHERE username = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $_SESSION["username"];

    // Try to execute this statement
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // Retrieve individual field value 
        $name = $row["name"];
        $username = $row["username"];
        $password = $row["password"];
        $gender = $row["gender"];
        $email = $row["email"];
        $age = $row["age"];
        $occupation = $row["occupation"];
        $country = $row["country"];
        $state = $row["state"];
    } else {
        echo "Try after some time";
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
} else {
    $_SESSION['username'] = "";
    echo "First login yourself";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <title>My Profile</title>

    <link rel="stylesheet" href="myprofile.css?v=<?php echo time(); ?>" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>


<nav class="navbar">
        <div class="content1">
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

    
    <div class="banner"></div>

    <div class="banner"></div>
    <div class="about">
        <div class="content">

            <div class="container">

                <div class="image">
                    <?php

                    if ($gender == "male") {
                        echo '<img src="user2.png" />';
                    } else if ($gender == "female") {
                        echo '<img src="user3.jpg" />';
                    } else {
                        echo '<img src="user3.png" />';
                    }
 
                    ?>
                </div>

                <div class="details">

                    <div class="det1">

                        <div class="info">
                            <h2>Name </h2>
                            <p><?php echo $name; ?></p>
                        </div>

                        <div class="info">
                            <h2>Username </h2>
                            <p><?php echo $username; ?></p>
                        </div>

                        


                    </div>

                    <div class="det2">

                        <div class="info">
                            <h2>Gender </h2>
                            <p><?php echo $gender; ?></p>
                        </div>

                        <div class="info">
                            <h2>Email </h2>
                            <p><?php echo $email; ?></p>
                        </div>

                        <div class="info">
                            <h2>Age </h2>
                            <p><?php echo $age; ?></p>
                        </div>

                    </div>

                    <div class="det3">

                        <div class="info">
                            <h2>Occupation </h2>
                            <p><?php echo $occupation; ?></p>
                        </div>

                        <div class="info">
                            <h2>Country </h2>
                            <p><?php echo $country; ?></p>
                        </div>

                        <div class="info">
                            <h2>State </h2>
                            <?php echo $state; ?>
                        </div>

                        
                        
                    </div>
                    <button  class="btn btn-primary"><a href='verify_password.php'> Update Your Details </a></button>
                </div>

            </div>
            
            
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
                        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
                    }
                </script>

</body>

</html>