<?php

require_once "config.php";
session_start();

if( isset($_POST['register'])){

    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $answer_by = $_SESSION['username'];
    $query = "UPDATE `questions` SET `answer` = '". $answer . "' , `answer_by` ='". $answer_by ."' WHERE `questions`.`question` = '" .$question."' ";
		$result = mysqli_query($link,$query);
       // echo $result;
        if( !$result){
            $_SESSION['a_submit_error'] = 1;
        }
        else{
            $_SESSION['a_success'] = 1;
        }
        $page = $_SESSION['page'];
        header("location: ".$page." ");
        exit();
    
}
mysqli_close($link);
?>