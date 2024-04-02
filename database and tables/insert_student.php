   <?php
try {

    include('create_database.php');
    include('Student_table.php');
    // include('../registration form/student_register_validate.php');

    $insert = " INSERT INTO Student_table(Name, Email, Phone,login_pwd, DOB,course_type, std_course, year, semester, Section, RegistrationNO, RollNo,Gender, address,Image,  status)
    VALUES('$stdname', '$Semail', '$Sphone','$password', '$Sdob', '$courseType','$selectcourse', '$selectyear', '$selectsem', '$Ssection', '$Sregister', '$Sroll','$gender', '$Saddress','$filename','$status')";

     mysqli_select_db($connect, "Attendance_system");
     $connect->select_db("Attendance_system");

    if (mysqli_query($connect, $insert)) {
        echo '<script>alert("registered ");</script>';
        echo '<script>alert("check Gmail for login password");</script>';
    } else {
        echo "<script>alert('Failed to insert data')</script>";
    }
} catch (Exception $e) {
    die("insert errror:" . $e->getMessage());
}
?>