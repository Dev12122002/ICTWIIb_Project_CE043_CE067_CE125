<?php

require_once "config.php";
session_start();

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

if( isset($_POST['submit'])){

    $sql = "INSERT INTO questions (username, question, answer, answer_by, topic) VALUES  (?,?,?,?,?)";

    if($stmt = mysqli_prepare($link,$sql)){

        mysqli_stmt_bind_param($stmt,'sssss',$param_username, $param_question,$param_answer, $param_answer_by, $param_topic);

        $param_username = $_SESSION['username'];
        $param_question = $_POST['question'];
        $param_answer = "";
        $param_answer_by = "";
        $param_topic = $_SESSION['topic'];

        if( !mysqli_stmt_execute($stmt)){
            $_SESSION['sub_submit_error'] = 1;
        }
        else{
          if( $_SESSION['topic'] == "gadget"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
         else if( $_SESSION['topic'] == "business"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
         else if( $_SESSION['topic'] == "career"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
         else if( $_SESSION['topic'] == "legal"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
         else if( $_SESSION['topic'] == "diet"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
         else if( $_SESSION['topic'] == "family"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
         else if( $_SESSION['topic'] == "other"){
              $visitor_email = "girianishpramodbhai@gmail.com";
          }
            
          $user = $_SESSION['username'];
          $email = $_SESSION['email_id'];
          $question = $_POST['question'];
            $user_message = "Hi, $user  $email , Question: $question";
            $mail = new PHPMailer();
            $mail->IsSMTP();  // telling the class to use SMTP
            // $mail->SMTPDebug = 2;
            $mail->Mailer = "smtp";
            $mail->Host = "ssl://smtp.gmail.com";
            $mail->Port = 465;
            $mail->SMTPAuth = true; // turn on SMTP authentication
            $mail->Username = "girianish2711@gmail.com"; // SMTP username
            // $mail->Password = "wxsn gwce rxuy vvmj"; // SMTP password
             $mail->Password = "tzwk yobt znub kcsy"; // SMTP password
            //  $Mail->Priority = 1;
            $mail->AddAddress($visitor_email, $user_id1);
            $mail->SetFrom($visitor_email, $user_id1);
            // $mail->AddReplyTo($visitor_email,$name);
            $mail->Subject  = "Question from Secret Friend";
            $mail->Body     = $user_message;
            $mail->WordWrap = 50;
            if(!$mail->Send()) {
                $_SESSION['sub_not_send'] = 1;
                // echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
                $_SESSION['sub_send'] = 1;
            }
        
            
         
    }

    
    $page = $_SESSION['page'];
    header("location: ".$page." ");
    exit(); 
        
}

}
mysqli_close($link);
?>