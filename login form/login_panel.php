<?php
$username = $password = $email = '';
$login_email_err = $login_pwd_err = $login_uname_err = '';
$student_login_err = 0;
include ('../database and tables/create_database.php');
error_reporting(0);
try {
    if (isset($_POST['login_submit'])) {
        //checking select box of login type
        if (isset($_POST['login_person'])) {
            $login_person = $_POST['login_person'];
            if ($login_person == ' ') {
                $student_login_err++;
                $select_person_err = "choose login type";
            } else {
                $login_person = $_POST['login_person'];
            }
        }


        if (isset($_POST['username']) && empty($_POST['username'])) {
            $student_login_err++;
            $login_uname_err = "enter your name";
        }else{
            $login_uname_err = " ";
        }


        if (isset($_POST['email']) && empty($_POST['email'])) {
            $student_login_err++;
            $login_email_err = "enter your email";
        }else{
            $login_email_err = " ";
        }


        if (isset($_POST['password']) && empty($_POST['password'])) {
            $student_login_err++;
            $login_pwd_err = "enter password";
        }else{
            $login_pwd_err = " ";
        }


        //check for studnet login
        if ($login_person == 'Student') {
             
                // taking users input to check
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];


                //retriving from database
                $select_student = "SELECT Name AND Email AND login_pwd from student_table where Name='$username' AND Email='$email' AND login_pwd='$password '";
                $result_name = mysqli_query($connect, $select_student);
                if (mysqli_num_rows($result_name) == 1) {
                    $ursename = $_POST['ursename'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                } else {
                    $student_login_err++;
                    $login_uname_err = 'name is not found ';
                    $login_email_err = 'wrong email';
                }
            
            if ($student_login_err == 0) {
                header('Location:http://localhost/Attendance%20System%20project/Student_Dashboard/student_dashboard.php');
            }
        }

        //check for teacher login
        if ($login_person == 'Teacher') {
            $teacher_login_err = 0;
             
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //taking name from database
                $select_name = "SELECT Name AND Email AND password from Teacher_details where Name='$username' AND Email='$email' AND  password='$password' ";
                $result_name = mysqli_query($connect, $select_name);
                if (mysqli_num_rows($result_name) == 1) {
                    $ursename = $_POST['ursename'];
                    $email = $_POST['email'];
                $password = $_POST['password'];
                } else {
                    $teacher_login_err++;
                    $login_uname_err = 'name is not found ';
                    $login_email_err = 'wrong email';
                    $login_pwd_err = 'wrong passowrd';
                }
            if ($teacher_login_err == 0) {
                header('Location:https://localhost/Attendance%20System%20project/Teachers%20dashboard/teacher_dashboard.php');
            }
        }




        
        //check for admin login
        if ($login_person == 'Admin') {
            $admin_login_err = 0;
            
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //taking name from database
                $select_name = "SELECT Name AND Email AND password from Admin_details where Name='$username' AND Email='$email' AND password='$password'";
                $result_name = mysqli_query($connect, $select_name);
                if (mysqli_num_rows($result_name) == 1) {
                    $ursename = $_POST['ursename'];
                    $email = $_POST['email'];
                $password = $_POST['password'];
                } else {
                    $admin_login_err++;
                    $login_uname_err = 'name is not found ';
                    $login_email_err = 'wrong email';
                }            
            
            if ($admin_login_err == 0) {
                header('Location:https://localhost/Attendance%20System%20project/Admin%20dashboard/Admin_dashboard.php');
            }
        }
    }
} catch (Exception $ex) {
    die('Database Error: ' . $ex->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login panel</title>
    <link rel="stylesheet" href="login_panel_css.css" />
</head>

<body>
    <!-- login panel-->
    <form action="" method="post">
        <div id="idloginform">
            <span class="close" onclick="hideLogin()">&times;</span>
            <div>
                <h1 id="loginpanel">Login panel</h1>
                <img id="idloginimag" src="images/login_logo.png" />
            </div>
            <div>
                <label class="loginlabel" for="username">Name:</label>
                <input type="text" class="user_input" id="username" name="username" placeholder="enter Name"
                    value="<?php echo $username; ?>">
                <span class="login_err" id="name_err">
                    <?php echo isset($login_uname_err) ? $login_uname_err :''; ?>
                </span>
            </div>
            <div>
                <label class="loginlabel" for="email">email:</label>
                <input class="user_input" type="email" id="email" name="email" placeholder="enter email"
                    value="<?php echo $email; ?>">
                <span class="login_err" id="email_err">
                    <?php echo isset($login_email_err) ? $login_email_err : ''; ?>
                </span>
            </div>
            <div>
                <label class="loginlabel" for="password">Password:</label>
                <input class="user_input" type="password" id="password" name="password" placeholder="enter passowrd"
                    value="<?php echo $password; ?>" >
                    <img src="images/pwd_hide1.png" id="pwd_hide" onclick="pwdhide()"><img src="images/pwd_show.png" id="pwd_show" onclick="pwdshow()">
                <span class="login_err" id="password_err">
                    <?php echo isset($login_pwd_err) ? $login_pwd_err : ''; ?>
                </span>
            </div>
            <div>
                <label class="loginlabel login_select" for="login_person">Login person:</label>
                <select id="login_person" name="login_person">
                    <option value=" ">Who are you?</option>
                    <option value="Admin" <?php if ($login_person == "Admin")
                        echo "selected"; ?>>Admin</option>
                    <option value="Teacher" <?php if ($login_person == "Teacher")
                        echo "selected"; ?>>
                        Teacher</option>
                    <option value="Student" <?php if ($login_person == "Student")
                        echo "selected"; ?>>
                        Student</option>
                </select>
                <span class="login_err" id="login_type_err">
                    <?php echo isset($select_person_err) ? $select_person_err : ''; ?>
                </span>
            </div>
            <div>
                <input type="checkbox" id="keep_sign" name="keep_sign" value="keep_sign">keep me sign in
            </div>

            <div>
                <button class="loginclick" id="login_cancel" onclick="logincancel()">cancel</button>
                <button class="loginclick" id="login_submit" name="login_submit" onclick="loginsubmit()">login</button>
            </div>
            <div class="log_register">
                <label for="log_reg">NO register? </label>
                <button type="button" id="log_reg" name="login_reg" action="../registration form/Student_register.php">
                    register</button>
            </div>
        </div>
    </form>
<script>
    document.getElementById('pwd_show').style.display = 'none';
function pwdshow(){
    document.getElementById('pwd_hide').style.display = 'inline';
    document.getElementById('pwd_show').style.display = 'none';
    document.getElementById('password').type = 'password';

}
function pwdhide(){
    document.getElementById('pwd_show').style.display = 'inline';
    document.getElementById('pwd_hide').style.display = 'none';
    document.getElementById('password').type = 'text';
}
document.getElementById('password').addEventListener('contextmenu', function(event) {
    event.preventDefault();
});
</script>
</body>

</html>