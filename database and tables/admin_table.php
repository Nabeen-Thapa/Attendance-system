
<?php
error_reporting(E_ALL);
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create database table
    $admin_tbl = "CREATE TABLE if not exists Admin_details(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        Email VARCHAR(255) NOT NULL,
        Phone VARCHAR(20) NOT NULL,
        password varchar(20),
        status boolean)";
    if(mysqli_query($connect,$admin_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create table';
    }
}catch(Exception $e){
    die('student table creating error :' .$e->getMessage());
}

?>