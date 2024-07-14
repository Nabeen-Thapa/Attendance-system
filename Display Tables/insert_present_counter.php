<?php
include '../database and tables/create_database.php';
// include('../title bar/load_subject.php'); 
error_reporting(E_ALL);
try {
    $roll = $_GET['roll'];
    $present = $_GET['present'];
    // Define the column headings
    $columnHeadings = array(
        'Rollno_1', 'Rollno_2', 'Rollno_3', 'Rollno_4', 'Rollno_5', 'Rollno_6', 'Rollno_7', 'Rollno_8', 'Rollno_9',
        'Rollno_10', 'Rollno_11', 'Rollno_12', 'Rollno_13', 'Rollno_14', 'Rollno_15', 'Rollno_16', 'Rollno_17',
        'Rollno_18', 'Rollno_19', 'Rollno_20', 'Rollno_21', 'Rollno_22', 'Rollno_23', 'Rollno_24', 'Rollno_25',
        'Rollno_26', 'Rollno_27', 'Rollno_28', 'Rollno_29', 'Rollno_30', 'Rollno_31', 'Rollno_32', 'Rollno_33',
        'Rollno_34', 'Rollno_35'
    );
    
//     $roll_hold = 0;
// for ($i = 1; $i < count($columnHeadings); $i++) {
//     if ($columnHeadings[$i] === "Rollno_".$roll) {
//         $roll_hold = 1;
//         break; 
//     }
//    }
 
    if($roll > count($columnHeadings)){
     echo '<script>alert("Failed to insert record");</script>';
    }
    $insert_roll_Query = "INSERT INTO 4th_script_records (Date, Rollno_$roll) VALUES (NOW(), $present) ON DUPLICATE KEY UPDATE Rollno_$roll = $present";
    if (mysqli_query($connect, $insert_roll_Query)) {
        header('Location: http://localhost/Attendance%20System%20project/Display%20Tables/student_attendance_table.php');
        exit; 
    } else {
        echo '<script>alert("Failed to insert record");</script>';
    }

} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>
