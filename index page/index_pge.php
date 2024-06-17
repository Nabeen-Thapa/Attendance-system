
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" type="text/css" href="index_css.css" />
</head>
<body class="wrapper--body">
    <!--index form login and regsiter buttons-->
    
      <center>
        <form id="idchoosetype">
            <div id="idwelcome">Welcome!!</div>
            <h1>Student Attendance System</h1>
            <div>
                <div id="idloginborder">
                    <label class="loginfirst">Want to enter,</label>
                    <a href="../login form/login_panel.php"
                    class="loginopen" id="idlogin-choose">login</a>
                 
                </div>
            </div>
            <div id="idregborder">
                <div>
                    <label class="noreg">Want to login, Register first,</label>
                    <button class="regopen" id="idreg-choose" onclick="registerchoose()">Register</button>
                </div>
                <div id="idregopen">
                    <div>
                        <span class="regchooseclose" onclick="hideregister()">&times;</span>
                    </div>
                    <div>
                        <h2 calss="classregopen">online Attendance Registration</h2>
                        <button class="regtype" id="idteacherreg" onclick="teacherregistration()">Teacher</button>
                        <a href="../registration form/Student_register.php"
                        class="regtype" id="idstudentreg">Student</a>
                    </div>
                </div>
            </div>
        </form> 
    </center> 
    <!-- <script src="index_script.js"></script> -->
</body>
</html>