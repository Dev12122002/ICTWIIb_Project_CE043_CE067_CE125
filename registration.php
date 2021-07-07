<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>" >
  <link rel="stylesheet" href="alert.css?v=<?php echo time(); ?>" >
</head>

<body>
  
  <?php

    session_start();

    if(isset($_SESSION['special_char'])){
      ?>

       <div class="alert">
          <span class="closebtn">&times;</span>  
          <strong><?php echo "Please do not use Special characters in Name, Username, Occupation, Country, State !!"; ?></strong> 
     </div>

      <?php
        
        unset($_SESSION['special_char']);
      }
     
  ?>
  <br>
  <?php

if(isset($_SESSION['email'])){
  ?>

    <div class="alert">
       <span class="closebtn">&times;</span>  
       <strong><?php echo "Please use correct E-mail address !!"; ?></strong> 
    </div>

  <?php
  
  unset($_SESSION['email']);
}
?>
<br>
<?php

if(isset($_SESSION['password'])){
  ?>

    <div class="alert">
        <span class="closebtn">&times;</span>  
        <strong><?php echo "Password must contain one Special character, one Capital letter, one Small letter and digit from 0-9 !!"; ?></strong> 
    </div>

  <?php
  
  unset($_SESSION['password']);
}

?>
<br>
  
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
  
  <div class="container ">

    <h3>Please Register Here</h3>

    <form action="notification.php" method="post">

      <div class="form-group">
        <label for="inputEmail">Name :</label>
      </div>

      <div class="form-control">
        <input type="text" name="name" id="inputEmail" placeholder="Enter Your Name" required>
      </div>

      <div class="form-group">
        <label for="inputEmail0">Username :</label>
      </div>

      <div class="form-control">
        <input type="text" name="username" id="inputEmail0" placeholder="Enter The Username" minlength="5"
         required>
      </div>

      <div class="form-group">
        <label for="inputPassword1">Password :</label>
      </div>
      
      <div class="form-control">
        <input type="password" name="password" id="inputPassword1" placeholder="Enter The Password" minlength="6"
          maxlength="12" required>
      </div>
      
      <div class="form1-group" style="margin-top:10px;">
        
        <label for="inputEmail2">Gender :</label>&nbsp
        <input type="radio" class="form-control" name="gender" id="inputEmail2" value="male" required>
        <label for="inputEmail2">Male</label>&nbsp&nbsp
        <input type="radio" class="form-control" name="gender" id="inputEmail3" value="female" required>
        <label for="inputEmail3">Female</label>&nbsp&nbsp
        <input type="radio" class="form-control" name="gender" id="inputEmail4" value="other" required>
        <label for="inputEmail4">Other</label>

      </div>

      <div class="form-group" style="margin-top:15px;">
        <label for="inputEmail5">Email :</label>
      </div>
      
      <div class="form-control">
        <input type="email" name="email" id="inputEmail5" placeholder="name@example.com" required>
      </div>

      <div class="form-group">
        <label for="inputEmail0">Age :</label>
      </div>
      
      <div class="form-control">
        <input type="number" name="age" id="inputEmail0" placeholder="Enter Your Age"  required>
      </div>
      
      <div class="form-group">
        <label for="inputEmail6">Occupation :</label>
      </div>
      
      <div class="form-control">
        <input type="text" name="occupation" id="inputEmail6" placeholder="Enter Your Occupation" required>
      </div>
      
      <div class="form-group">
        <label for="inputCity">Country :</label>
      </div>
      
      <div class="form-control">
        <input type="text" name="country" id="inputCity" placeholder="Enter Your Country Name" required>
      </div>
      
      <div class="form-group">
        <label for="inputEmail7">State :</label>
      </div>
      
      <div class="form-control">
        <input type="text" name="state" id="inputEmail7" placeholder="Enter Your State Name" required>
      </div>

      <button type="submit" name="register" class="btn btn-primary">Register</button>
      <button type="reset" class="btn btn-primary">Reset</button>
    
    </form>
  </div>

  

</body>

</html>