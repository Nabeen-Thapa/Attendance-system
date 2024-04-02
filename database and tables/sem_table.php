
<?php
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create course table on database
    $semester_tbl = "CREATE TABLE IF NOT EXISTS Semester_table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        year_id INT,
        FOREIGN KEY (year_id) REFERENCES Year_table(id)
    )";
    
    if(mysqli_query($connect,$semester_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

    //iseret into course table
    $insert_semester = "INSERT INTO  Semester_table(Name,year_id)VALUES('First semester','1'),('second semester','1'),('third semester','2'),('fourth semester','2'),('fifth semester','3'),('sixth semester','3'),('seventh semester','4'),('eighth semester','4')";
    if(mysqli_query($connect,$insert_semester)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

}catch(Exception $e){
    die('semester table creating error:' .$e->getMessage());
}

?>