<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher dash</title>
    <link rel="stylesheet" href="teacher_dashcss.css">
    <link rel="stylesheet" href="../title bar/title_bar_css.css">
    <link rel="stylesheet" href="../title bar/menu_barcss.css">
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['teacher_id'])){
        header('location:http://localhost/Attendance%20System%20project/login%20form/login_panel.php?err=1');
    }
     include ("../title bar/title_bar.php");
     include ("../title bar/menu_bar.php");
    ?>
    <div class="Dash_entities" id="teacher_dash">
        <div class="entities">
            <button class="entity">courses()
                <img src="images/attendance pic.png" class="admindashpic" id="">
            </button>
        </div>
        </div>
        <div class="entities">
            <button class="entity" id="">All students()</button>
            <img src="images/all student.jpg" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="entity" id="">Female students()
            <img src="images/female student.png" class="admindashpic" id=""></button>
        </div>
        <div class="entities">
            <button class="entity" id="">Male students()
            <img src="images/male student.png" class="admindashpic" id=""></button>
        </div>
        <div class="entities">
            <button class="entity" id="">present studnts()
            <img src="images/present student.png" class="admindashpic" id=""></button>
        </div>
        <div class="entities">
            <button class="entity" id="">Absent studnts()
            <img src="images/absent stundet.png" class="admindashpic" id=""></button>
        </div>
        
    </div>
    <script src="../title bar/menu_berjs.js"></script>
</body>
</html>