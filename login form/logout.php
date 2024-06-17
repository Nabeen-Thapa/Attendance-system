<?php

session_start();

session_destroy();
setcookie('teacher_id',false,time()-20*365*24*60*60);
                        setcookie('teacher_username',false,time()-20*365*24*60*60);
                        setcookie('teacher_email',false,time()-20*365*24*60*60);
header('location:http://localhost/Attendance%20System%20project/login%20form/login_panel.php');

?>