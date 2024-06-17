
<?php
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create course table on database
    $year_tbl = "CREATE TABLE IF NOT EXISTS Year_table(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        course_id int,
        
    )";
    if(mysqli_query($connect,$year_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

    //iseret into course table
    $insert_year = "INSERT INTO Year_table(Name)VALUES('First year'),('Second year'),('Third year'),('Fourth year')";
    if(mysqli_query($connect,$insert_year)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

}catch(Exception $e){
    die('course table creating error:' .$e->getMessage());
}

?>