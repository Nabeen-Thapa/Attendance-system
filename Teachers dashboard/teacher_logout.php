<?php
session_start();
session_destroy();
setcookie('id',false,time()-20*365*24*60*60);
    setcookie('teacher_username',false,time()-20*365*24*60*60);
    setcookie('teacher_id',false,time()-20*365*24*60*60);
    setcookie('teacher_name',false,time()-20*365*24*60*60);
    setcookie('teacher_profile',false,time()-20*365*24*60*60);
header('location:https://localhost/Attendance%20System%20project/Teachers%20dashboard/teacher_login.php');


?>