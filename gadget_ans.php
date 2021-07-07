<?php

require_once "config.php";
session_start();
$_SESSION['page'] = "gadget_ans.php";
//$_SESSION['submit_error'] = "";
//$_SESSION['success'] = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="answer_design.css?v=<?php echo time(); ?>" >
    <link rel="stylesheet" href="alert.css?v=<?php echo time(); ?>" >
    <title>Gadget</title>
</head>
<body>


  <?php
if( isset($_SESSION['a_submit_error'] )){
  ?>
  <div class="alert">
  <span class="closebtn">&times;</span>
    <?php 
  echo "Some Error Occured, Please try again... ";
  ?>
  </div>
  <?php
  unset($_SESSION['a_submit_error']);
}


  if( isset($_SESSION['a_success'] )){
    ?>
    <div class="success">
    <span class="closebtn">&times;</span>
      <?php
    echo "Answer has been Saved !!";
    ?>
    </div>
    <?php
    unset($_SESSION['a_success']);
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
  </div>
</div>
<?php

$sql = "SELECT * FROM questions where topic = 'gadget'";
if($result = mysqli_query($link, $sql)){
	if((mysqli_num_rows($result) > 0) ){
        ?>
        
         <div class="container">
         <div class="heading">
                         <button  class="btn btn-primary"><a href='logout.php'> Log Out </a></button>
                        <h1> Gadget Section </h1>
                        
                        <h3> Please enter the Answers in the Database, so that our Friends can get this easily. </h3>
                   </div>
                    <div class="timeline">
                   
                        <ul>
        
        
        <?php
			$id = 1;
		                      	while($row = mysqli_fetch_array($result) ){
                              if(empty($row['answer'])){
				
         ?>
                                 <li>
                                    <div class="timeline-content">
                                        <form action="answer.php" method="post">
                                          <h2> Question : </h2>
                                          <h3><?php echo $row['question']; ?></h3><br>
                                          <h3> Enter the Answer :</h3>
                                          <input type="text" name="answer" placeholder="Wrtie the Answer... " required><br><br>
                                          <input type="checkbox" name="question" id="1" value="<?php echo $row['question']; ?>" required>&nbsp&nbsp <label for="1"> Are you sure ? </label><br>
                                          <button type="submit" name="register" class="btn btn-primary">Submit</button>
                                       </form>
                                    </div>
                                </li>

                            <?php 
                          }
                          } ?>
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
        
      
      
			
      
      
    
    <?php
		// Free result set fa fa-caret-down

		mysqli_free_result($result);
	} else{
		echo "<p><em>No records were found.</em></p>";
    ?><button  class="btn btn-primary"><a href='logout.php'> Log Out </a></button><?php
	}
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
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

</body>
</html>