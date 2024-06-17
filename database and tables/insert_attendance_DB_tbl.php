<?php
try {

    include('create_database.php');
    
    $std_insert_attendance = " INSERT INTO fourth_sem_DB_records(Name,RegistrationNO,Image,status)
    VALUES('$stdname','$Sregister','$filename','$status')";

     mysqli_select_db($connect, "Attendance_system");
     $connect->select_db("Attendance_system");

    if (mysqli_query($connect, $std_insert_attendance)) {
        echo '';
    } else {
        echo "<script>alert('Failed to insert data in attendacne record')</script>";
    }
} catch (Exception $e) {
    die("insert errror:" . $e->getMessage());
}
?>