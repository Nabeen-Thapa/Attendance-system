
<?php
try{
    //connection to database
    include 'create_database.php';
    
    //sql to create course table on database
    $subject_tbl = "CREATE TABLE IF NOT EXISTS  Subject_table(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(255) NOT NULL,
        Code VARCHAR(50) 
        )";
    if(mysqli_query($connect,$subject_tbl)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

    //iseret into course table
    $insert_subject = "INSERT INTO  Subject_table(Title)VALUES('Database Management system'),('Scripting language'),('Munerical Method'),('Operating system'),('Software engineering')";
    if(mysqli_query($connect,$insert_subject)){
        echo ' ';
    } else {
        echo 'Failed to create table' . mysqli_error($connect);
    }

}catch(Exception $e){
    die('course table creating error:' .$e->getMessage());
}

?>