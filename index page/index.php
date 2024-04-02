
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="index_css.css" />
    <link rel="stylesheet" href="../login form/login_panel_css.css" />
    <link rel="stylesheet" href="../registration form/registration_css.css" />
</head>
<body>
    <!--index form login and regsiter buttons-->
    
      <center>
        <form id="idchoosetype">
            <div id="idwelcome">Welcome!!</div>
            <h1>Student Attendance System</h1>
            <div>
                <div id="idloginborder">
                    <label class="loginfirst">Want to enter,</label>
                    <button class="loginopen" id="idlogin-choose" onclick="loginclick()">login</button>
                 
                </div>
            </div>
            <div id="idregborder">
                <div>
                    <label class="noreg">Want to login Register first,</label>
                    <button class="regopen" id="idreg-choose" onclick="registerchoose()">Register</button>
                </div>
                <div id="idregopen">
                    <div>
                        <span class="regchooseclose" onclick="hideregister()">&times;</span>
                    </div>
                    <div>
                        <h2 calss="classregopen">online Attendance Registration</h2>
                        <button class="regtype" id="idadminreg" onclick="adminregistration()">Admin</button>
                        <button class="regtype" id="idteacherreg" onclick="teacherregistration()">Teacher</button>
                        <button class="regtype" id="idstudentreg" onclick="studentregistration()">Student</button>
                    </div>
                </div>
            </div>
        </form> 
    </center> 
   <div id="login_include">
    <?php include '../login form/login_panel.php'; ?>
   </div>
   
   <?php include '../registration form/Student_register.php'?>
    <script src="index_script.js"></script>
    <script src="../login form/login_script.js"></script>
    <script src="../registration form/register_script.js"></script>
</body>
</html>