<?php
include ('../database and tables/create_database.php');
error_reporting(0);
    
    $email = $_POST['email'];
   
try{
    $select_email = "SELECT Email from student_table where Email='$email'";
    $result_email = mysqli_query($connect,$select_email);
    if(mysqli_num_rows($result_email)  == 1){
        echo ' ';
    } else {
        echo 'wrong email';
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}

?>