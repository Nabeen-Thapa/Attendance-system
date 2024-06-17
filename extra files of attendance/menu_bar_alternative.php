<?php 
// try{
// // session_start();
// if(!isset($_SESSION['username'])){
//     header('http://localhost/Attendance%20System%20project/login%20form/login_panel.php?msg=1');
// }
// $validtime  = $_SESSION['login_time'] + 60;
// if(isset($_SESSION['login_time']) && time() < $validtime){
//     $_SESSION['login_time'] = time();
// }else {
//     header('http://localhost/Attendance%20System%20project/login%20form/login_panel.php?msg=2');
// }
// }catch(Exception $ex){
//     die ("session errro: " .$ex->getMessage());
// }

if(isset($_POST['Afile'])){
    header('Location:ttps://localhost/Attendance System project/Display Tables/student_attendance_table.php');
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munu bar</title>
    <link rel="stylesheet" href="menu_barcss.css">
    <link rel="stylesheet" href="../Display Tables/student_attendance_tblcss.css">
    <link rel="stylesheet" href="../registration form/registration_css.css">
</head>
<body>
    <div class="menu_bar">
        <button onclick="Tdashboard()" class="menus"><a href=""></a> DashBoard<img src="images/dashboards.png" alt="" class="teach_dashimg"></button>

        <button onclick="students()" class="menus"><img src="images/all students.png" alt="" class="teach_dashimg" id="allstd">Students</button>

        <button onclick="Afile()" class="menus" id="Afile" name="Afile"><img src="images/attendance file.png" alt="" class="teach_dashimg">Attendance file <a href="https://localhost/Attendance System project/Display Tables/student_attendance_table.php"></a></button>


        <button onclick="Arecord()" class="menus" id="Arecord"><img src="images/present students.png" alt="" class="teach_dashimg">Attendance records</button>

        <button onclick="addstd()" class="menus" id="add_std"><img src="images/add students.png" id="addstd" class="teach_dashimg">Add students</button>
        
        <button onclick="addsubject()" class="menus" id="add_sub"><img src="images/add subjects.png" id="addsub" class="teach_dashimg">Add subject</button>

        <button onclick="logout()" class="menus" id="logout"><img src="images/logoutt1.png" id="logout" class="teach_dashimg">
    <a href="log_out.php" class="menus">Logout</a></button>
    </div> 
    <!-- <script src="../Teachers dashboard/teacher_dashboard_displaysjs.js"></script> -->
    <!-- <script src="menu_berjs.js"></script> -->
</body>
</html>