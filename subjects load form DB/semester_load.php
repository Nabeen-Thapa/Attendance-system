<?php
$year_id = $_POST['year'];
try{
    $connection = mysqli_connect('localhost','root','','Attendance_system');
     $sql = " SELECT * from semester_table where Sem_id=$year_id";
     $result = mysqli_query($connection,$sql);
     $subject = "<option value=''>Select Subject</option>";
     if(mysqli_num_rows($result)  > 0){
        while ($sub = mysqli_fetch_assoc($result)) {
            $subject .= "<option value='" . $sub['id'] . "'>" . $sub['Name'] ."</option>";
        }
     }
     echo $subject;
 }catch(Exception $ex){
     die('Database Error: ' . $ex->getMessage());
 }
?>