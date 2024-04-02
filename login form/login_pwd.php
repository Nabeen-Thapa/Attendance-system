<?php
include ('../database and tables/create_database.php');
error_reporting(0);
    $password = $_POST['password'];
try{
    $select_pwd = "SELECT login_pwd from student_table where login_pwd='$password'";
    $result_pwd = mysqli_query($connect,$select_pwd);
    if(mysqli_num_rows($result_pwd)  == 1){
        echo 'pwd match ';
    } else {
        echo 'wrong passowrd';
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}

?>