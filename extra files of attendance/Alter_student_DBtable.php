<?php
try {
    // include('create_database.php');
    // include('Student_table.php');
    
    // Assuming $connect is defined in create_database.php
    
    // SQL query to add a column to an existing table
   // $alter_gen = "ALTER TABLE Student_table ADD COLUMN Gender VARCHAR(10)";
    
    // Change database to "Attendance_system"
    mysqli_select_db($connect, "Attendance_system");

    // Execute the ALTER TABLE query
    if (mysqli_query($connect, $alter_gen)) {
        echo "Column added successfully";
    } else {
        echo "Failed to add column";
    }
} catch (Exception $e) {
    die("alter Error: " . $e->getMessage());
}
?>
