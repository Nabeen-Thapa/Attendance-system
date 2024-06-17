<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student attendace records</title>
    <link rel="stylesheet" href="std_record_tblcss.css">
    <link rel="stylesheet" href="../title bar/title_bar_css.css">
    <link rel="stylesheet" href="../title bar/menu_barcss.css">
</head>

<body>

    <!-- <script src="../Display Tables/attendance_counterjs.js"></script> -->
    <script src="../title bar/menu_berjs.js"></script>
</body>

</html>
<?php

//attendance present counter
// include("../Display Tables/Attendacne_counter.php");
// include ("../Display Tables/student_attendance_table.php");

error_reporting(E_ALL);
try {
    include '../database and tables/create_database.php';
    include ("../title bar/title_bar.php");
    include ("../title bar/menu_bar.php");
    // Fetch data
    $select_day = "SELECT * FROM fourth_sem_DB_records";
    $result_day = mysqli_query($connect, $select_day);

    if (mysqli_num_rows($result_day) > 0) {
        echo "<div class='std_tbl_css'id='student_record'>";
        echo "<center><h2>Attendance record</h2></center>";
        echo "<center><h3>subject: </h3></center>";
        echo "<center><h3>Teacher:</h3></center>";
        echo '<table border="1">
        <tr>
        <th rowspan="2">profile</th>  
        <th rowspan="2">ID</th>              
        <th rowspan="2" class="attendance_tbl" id="Aname">Name</th>
        <th rowspan="2" class="attendance_tbl">Registration No</th>
        <th row class="attendance_tbl" colspan="40">day of</th>
        
    </tr>
        <tr>
                    <th class="rec_months">day 1</th>
                    <th class="rec_months">day 2</th>
                    <th class="rec_months">day 3</th>
                    <th class="rec_months">day 4</th>
                    <th class="rec_months">day 5</th>
                    <th class="rec_months">day 6</th>
                    <th class="rec_months">day 7</th>
                    <th class="rec_months">day 8</th>
                    <th class="rec_months">day 9</th>
                    <th class="rec_months">day 10</th>
                    <th class="rec_months">day 11</th>
                    <th class="rec_months">day 12</th>
                    <th class="rec_months">day 13</th>
                    <th class="rec_months">day 14</th>
                    <th class="rec_months">day 15</th>
                    <th class="rec_months">day 16</th>
                    <th class="rec_months">day 17</th>
                    <th class="rec_months">day 18</th>
                    <th class="rec_months">day 19</th>
                    <th class="rec_months">day 20</th>
                    <th class="rec_months">day 21</th>
                    <th class="rec_months">day 22</th>
                    <th class="rec_months">day 23</th>
                    <th class="rec_months">day 24</th>
                    <th class="rec_months">day 25</th>
                    <th class="rec_months">day 26</th>
                    <th class="rec_months">day 27</th>
                    <th class="rec_months">day 28</th>
                    <th class="rec_months">day 29</th>
                    <th class="rec_months">day 30</th>
                    <th class="rec_months">day 31</th>
                    <th class="rec_months">day 32</th>
                    <th class="rec_months">day 33</th>
                    <th class="rec_months">day 34</th>
                    <th class="rec_months">day 35</th>
                    
                </tr>  
                   
            ';

        while ($row = mysqli_fetch_assoc($result_day)) {
            echo '<tr>
            <td>
            <img src="../registration form/student_images/' . $row['image'] . '" class="student_tbl_pic" onclick ="profile_details()">  
            </td>
                    <td>' . $row['id'] . '</td>
                    <td class="leftname">' . $row['Name'] . '</td>
                    <td>' . $row['RegistrationNo'] . '</td>
                    <td>' . $row['day_1'] . '</td>
                    <td>' . $row['day_2'] . '</td>
                    <td>' . $row['day_3'] . '</td>
                    <td>' . $row['day_4'] . '</td>
                    <td>' . $row['day_5'] . '</td>
                    <td>' . $row['day_6'] . '</td>
                    <td>' . $row['day_7'] . '</td>
                    <td>' . $row['day_8'] . '</td>
                    <td>' . $row['day_9'] . '</td>
                    <td>' . $row['day_10'] . '</td>
                    <td>' . $row['day_11'] . '</td>
                    <td>' . $row['day_12'] . '</td>
                    <td>' . $row['day_13'] . '</td>
                    <td>' . $row['day_14'] . '</td>
                    <td>' . $row['day_15'] . '</td>
                    <td>' . $row['day_16'] . '</td>
                    <td>' . $row['day_17'] . '</td>
                    <td>' . $row['day_18'] . '</td>
                    <td>' . $row['day_19'] . '</td>
                    <td>' . $row['day_20'] . '</td>
                    <td>' . $row['day_21'] . '</td>
                    <td>' . $row['day_22'] . '</td>
                    <td>' . $row['day_23'] . '</td>
                    <td>' . $row['day_24'] . '</td>
                    <td>' . $row['day_25'] . '</td>
                    <td>' . $row['day_26'] . '</td>
                    <td>' . $row['day_27'] . '</td>
                    <td>' . $row['day_28'] . '</td>
                    <td>' . $row['day_29'] . '</td>
                    <td>' . $row['day_30'] . '</td>
                    <td>' . $row['day_31'] . '</td>
                    <td>' . $row['day_32'] . '</td>
                    <td>' . $row['day_33'] . '</td>
                    <td>' . $row['day_34'] . '</td>
                    <td>' . $row['day_35'] . '</td>
                </tr>
            ';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo 'Data not found';
    }
    mysqli_close($connect);
} catch (Exception $e) {
    die('table display error: ' . $e->getMessage());
}
?>