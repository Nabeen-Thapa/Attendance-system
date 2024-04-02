<?php
include ('../database and tables/create_database.php');
error_reporting(0);
    $name = $_POST['username'];
   
try{
   
    $select_name = "SELECT Name from student_table where Name='$name'";
    $result_name = mysqli_query($connect,$select_name);
    if(mysqli_num_rows($result_name)  == 1){
        echo 'name match';
    } else {
        echo 'name is not found ';
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}

?>