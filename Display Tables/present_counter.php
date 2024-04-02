<?php
    $present_counter=0;
    if(isset($_POST["present"])){
        $present_counter++;
    }
    header('Location:https://localhost/Attendance%20System%20project/Display%20Tables/student_attendance_table.php');
?>

