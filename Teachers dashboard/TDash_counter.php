<?php
try {

    include('../database and tables/create_database.php');
    $counter = "SELECT COUNT(Name) AS counter from Student_table";
    // Execute the query
    $result = $mysqli->query($counter);

    // Check if the query was successful
    if ($result) {
        $row = $result->fetch_assoc();

        // Access the counter value
        $count = $row['counter'];
        echo "Number of rows: " . $count;
    } else {
        echo "Error executing query: ";
    }
} catch (Exception $e) {
    die("insert errror:" . $e->getMessage());
}


?>