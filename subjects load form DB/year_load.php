<?php
try{
    $connection = mysqli_connect('localhost','root','','Attendance_system');
   
    $sql = "select * from year_table ";
    $result = mysqli_query($connection,$sql);
    $years = [];
    if(mysqli_num_rows($result)  > 0){
       while ($sem = mysqli_fetch_assoc($result)) {
            array_push($years,$sem);
       }
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax For Dropdown</title>
</head>
<body>
    <h1>Dropdown Ajax</h1>
    <form action="">
        <label for="">year</label>
        <select name="year" id="year">
            <option value="">Select year</option>
            <?php foreach($years as $year){ ?>
                <option value="<?php echo $year['id'] ?>"><?php echo $year['Name'] ?></option>

            <?php } ?>
        </select>
        <br>
        <label for="">Subject</label>
        <select name="subject" id="subject">
            <option value="">Select Subject</option>
        </select>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#year').change(function(){
                var sem = $(this).val();
                // ajax call
                $.ajax('semester_load.php',{
                    data:{'year':sem},
                    dataType:'text',
                    method:'post',
                    success:function(response){
                        $('#subject').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
