<?php
$sec_id = $_POST['section'];
try{
    $connection = mysqli_connect('localhost','root','','Attendance_system');
     $sql = " SELECT * from subjects_table where Section_id=$sec_id";
     $result = mysqli_query($connection,$sql);
     $subject = "<option value=''>Section</option>";
     if(mysqli_num_rows($result)  > 0){
        while ($sub = mysqli_fetch_assoc($result)) {
            $subject .= "<option value='" . $sub['id'] . "'>" . $sub['Title'] ."</option>";
        }
     }
     echo $subject;
 }catch(Exception $ex){
     die('Database Error: ' . $ex->getMessage());
 }
?>