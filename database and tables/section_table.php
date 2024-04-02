
<?php
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create course table on database
    $semester_tbl = "CREATE TABLE IF NOT EXISTS Section_table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        year_id INT,
        FOREIGN KEY (year_id) REFERENCES Year_table(id),
        sem_id INT,
        FOREIGN KEY (sem_id) REFERENCES Semester_table(id)
        
    )";
    
    if(mysqli_query($connect,$semester_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create section table' . mysqli_error($connect);
    }

    //iseret into section table
    $insert_section = "INSERT INTO  Section_table(Name, sem_id, year_id)VALUES('section A','1','1'),('section B','1','1'),('section A','2', '1'),('section B','2','1'),('section A','3','2'),('section B','3','2'),('section A','4','2'),('section B','4','2')";
    if(mysqli_query($connect,$insert_section)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

}catch(Exception $e){
    die('semester table creating error:' .$e->getMessage());
}

?>