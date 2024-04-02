<?php
include ('../database and tables/create_database.php');
error_reporting(0);

try {
    $student_count = "SELECT COUNT(Name) FROM Student_table";
    $result_name = mysqli_query($connect, $student_count);
    
    if ($result_name && mysqli_num_rows($result_name) == 1) {
        $row = mysqli_fetch_assoc($result_name);
        $count = $row['COUNT(Name)'];
       
    } else {
        echo 'Table is empty';
    }
} catch (Exception $coutex) {
    // Handle the exception if needed
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher dash</title>
    <link rel="stylesheet" href="teacher_dashcss.css">
</head>
<body>
    <div class="Dash_entities" id="teacher_dash">
        <div class="entities">
            <button class="entity" id="">courses()
                <img src="images/attendance pic.png" class="admindashpic" id="">
            </button>
        </div>
        <div class="entities">
            <button class="entity" id="">years()
            <img src="images/attendance pic.png" class="admindashpic" id=""></button>
        </div>
        <div class="entities">
            <button class="entity" id="">sections()
            <img src="images/attendance pic.png" class="admindashpic" id=""></button>
        </div>
        <div class="entities">
            <button class="entity" id="">All students()<?php $count ;?>
            <img src="images/all student.jpg" class="admindashpic" id=""></button>
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