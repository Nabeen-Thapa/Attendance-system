<?php
session_start();
session_destroy();
    setcookie('id',false,time()-20*365*24*60*60);
    setcookie('admin_username',false,time()-20*365*24*60*60);
    setcookie('admin_id',false,time()-20*365*24*60*60);
    setcookie('admin_name',false,time()-20*365*24*60*60);
    setcookie('admin_image',false,time()-20*365*24*60*60);
header('location:https://localhost/Attendance%20System%20project/Admin%20dashboard/Admin_login.php');

?>