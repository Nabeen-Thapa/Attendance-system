<?php
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create course table on database
    $subject_tbl = "CREATE TABLE IF NOT EXISTS  Subjects_table(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(255) NOT NULL,
        Course VARCHAR(100),
        Year varchar(50),
        Year_id INT,
        Semester varchar(50),
        Sem_id INT,
        Section INT,
        
        Subject_code VARCHAR(50),
        Course_type VARCHAR(20)
        )";
    if(mysqli_query($connect,$subject_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create subject table' . mysqli_error($connect);
    }

    //iseret into course table
    //  $insert_subject = "INSERT INTO  Subjects_table(Title, Course, year_id, Sem_id, sec_id,Subject_code, Course_type)VALUES($subject, $sub_course, $sub_year, $sub_sem, $sub_sec,$sub_code, $sub_type)";
    // if(mysqli_query($connect,$insert_subject)){
    //     echo ' ';
    // } else {
    //     echo 'Failed to insert in subject table' . mysqli_error($connect);
    // }

}catch(Exception $e){
    die('subjects table creating error:' .$e->getMessage());
}
?>