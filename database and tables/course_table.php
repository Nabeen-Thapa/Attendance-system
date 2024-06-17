<?php
include 'create_database.php'; 

// creating the Course_table
$course_tbl = "CREATE TABLE IF NOT EXISTS Course_table(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    course_type_id INT,
    FOREIGN KEY (course_type_id) REFERENCES Course_type(id)
)";

// Execute the query  Course_table
if(mysqli_query($connect, $course_tbl)){
    echo 'Course table created successfully';
} else {
    echo 'Failed to create table: ' . mysqli_error($connect);
}

// SQL to insert data into Course_table
$insert_course = "INSERT INTO Course_table(Name, course_type_id) VALUES
                  ('BCA', 2),
                  ('BBA', 2),
                  ('BIT', 2),
                  ('BA', 1),
                  ('CSIT', 2),
                  ('BBS', 1)";


if(mysqli_query($connect, $insert_course)){
    echo 'Data inserted into Course table successfully';
} else {
    echo 'Failed to insert data into table: ' . mysqli_error($connect);
}

?>
