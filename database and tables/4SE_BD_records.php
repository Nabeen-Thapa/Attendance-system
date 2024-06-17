<?php
error_reporting(E_ALL);
try {
    // Connection to database
    include 'create_database.php';
    
    // SQL to create database table
    $fourth_software_record = "CREATE TABLE if not exists 4th_software_records(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Date  DATETIME,
        Rollno_1 INT,
        Rollno_2 INT,
        Rollno_3 INT,
        Rollno_4 INT,
        Rollno_5 INT,
        Rollno_6 INT,
        Rollno_7 INT,
        Rollno_8 INT,
        Rollno_9 INT,
        Rollno_10 INT,
        Rollno_11 INT,
        Rollno_12 INT,
        Rollno_13 INT,
        Rollno_14 INT,
        Rollno_15 INT,
        Rollno_16 INT,
        Rollno_17 INT,
        Rollno_18 INT,
        Rollno_19 INT,
        Rollno_20 INT,
        Rollno_21 INT,
        Rollno_22 INT,
        Rollno_23 INT,
        Rollno_24 INT,
        Rollno_25 INT,
        Rollno_26 INT,
        Rollno_27 INT,
        Rollno_28 INT,
        Rollno_29 INT,
        Rollno_30 INT,
        Rollno_31 INT,
        Rollno_32 INT,
        Rollno_33 INT,
        Rollno_34 INT,
        Rollno_35 INT
    )";

    if(mysqli_query($connect,$fourth_software_record)){
        echo ' ';
    } else {
        echo 'Failed to create table';
    }
} catch(Exception $e) {
    die('student table creating error: ' . $e->getMessage());
}
?>
