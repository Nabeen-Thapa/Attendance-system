
<?php
error_reporting(E_ALL);
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create database table
    $student_tbl = "CREATE TABLE if not exists Student_table(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        Email VARCHAR(255) NOT NULL,
        Phone VARCHAR(20) NOT NULL,
        login_pwd varchar(20),
        DOB DATE,
        course_type VARCHAR(30),
        std_course VARCHAR(255) NOT NULL,
        year VARCHAR(50),
        semester VARCHAR(50),
        section VARCHAR(10),
        RegistrationNo varchar(30) NOT NULL,
        RollNo varchar(30) NOT NULL,
        address VARCHAR(255) NOT NULL,
        Gender varchar(10),
        image varchar(255),
        status boolean)";
    if(mysqli_query($connect,$student_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create table';
    }
}catch(Exception $e){
    die('student table creating error :' .$e->getMessage());
}

?>