<pre>
<?php
error_reporting(E_ALL);
try{
    //connection to database
    $connection = mysqli_connect('localhost','root','','db_pmc_2078_sl');
    //sql to insert record for single row
    // $sql = "INSERT INTO tbl_products(name,price) values 
    // ('Pen',25)";
    //sql to insert record for multiple row
    $sql = "INSERT INTO tbl_products(name,price) values 
    ('Pen',25),('Copy',20),('Laptop',50000),('Mouse',1000)";
    if(mysqli_query($connection,$sql)){
        echo 'Product insert success';
    } else {
        echo 'Failed to insert data';
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}

?>