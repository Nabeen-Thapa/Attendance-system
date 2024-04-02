<?php
try{
    //connection to database
    include 'create_database.php';
    //insert into course table
    $insert_subject = " INSERT INTO Subjects_table(Title, Course, Year, year_id, Semester, Sem_id, Section ,Subject_code, Course_type)VALUES('$subject', '$sub_course', '$sub_year', '$year_id', '$sub_sem', '$sem_id', '$sub_sec','$sub_code', '$sub_type')";
    if(mysqli_query($connect,$insert_subject)){
        echo ' ';
    } else {
        echo 'Failed to insert in subject table' . mysqli_error($connect);
    }

}catch(Exception $e){
    die('subjects adding into database error:' .$e->getMessage());
}
