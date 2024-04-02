<?php
    include '../database and tables/create_database.php';

    $id=$_GET['id'];
    $select_update = "SELECT * FROM Student_table WHERE id = $id";
    $result_update = mysqli_query($connect, $select_update);

    if(mysqli_num_rows($result_update) > 0) {
        $student_data = mysqli_fetch_assoc($result_update);
    }else{
        echo"student data not found for update";
    }

?>


<?php
    $stdname = $Semail = $Ssection = $Saddress = '';
    //student name
    $status ='1';
    if(isset($_POST['std_regclk'])) {
        $error = 0;
        //for student name validation
        if (isset($_POST['stdinputname']) && !empty($_POST['stdinputname']) && trim($_POST['stdinputname'])) {
            $stdname = trim($_POST['stdinputname']);
            if (!preg_match('/^[A-Z][a-z\s]+([A-Z][a-z\s]+)*[A-Z][a-z\s]+$/', $stdname)) {
                $error++;
                $stderrName = 'your name is not valid';
            }
        } else {
            $error++;
            $stderrName = 'Enter your name';
        }
        // student email
        $stdemailcheck = filter_var($_POST['stdemail'], FILTER_SANITIZE_EMAIL);
        if (isset($_POST['stdemail']) && !empty($_POST['stdemail']) && trim($_POST['stdemail'])) {
            $Semail = trim($_POST['stdemail']);
            if (!filter_var($Semail, FILTER_VALIDATE_EMAIL)) {
                $error++;
                $stderremail = "Enter valid email, Do you mean " . $stdemailcheck . '?';
            }
        } else {
            $error++;
            $stderremail = 'Enter your email';
        }
        // studnet phone
        $phone_pattern = '/^(98|97)\d{8}$/';
        if (isset($_POST['stdphone']) && !empty($_POST['stdphone']) && trim($_POST['stdphone'])) {
            $Sphone = trim($_POST['stdphone']);
            if (!preg_match($phone_pattern, $Sphone)) {
                $error++;
                $stderrphone = "enter the validate phone";
            }
        } else {
            $error++;
            $stderrphone = "enter your phone number";
        }
        //studnet dob
        if (isset($_POST['date']) && !empty($_POST['date']) && trim($_POST['date'])) {
            $Sdob = trim($_POST['date']);
    
        } else {
            $error++;
            $stderrdate = 'Select your Date of birth';
        }
    
        // Check if the checkboxes are checked
    
        if (isset($_POST["courseType"])) {
            $courseType = $_POST["courseType"];
        } else {
            $error++;
            $stderrCtype = "Choose your course type";
        }
        //setudent select course
        $Scourse = $_POST["selectcourse"];
        if ($Scourse === "") {
            $Serrcourse = "Please select an course";
        } else {
            $selectcourse = $_POST['selectcourse'];
        }
        //setudent select year
        if (isset($_POST['selectyear'])) {
            $Syear = $_POST["selectyear"];
            if ($Scourse === "") {
                $Serryear = "Please select an year";
            } else {
                $selectyear = $_POST['selectyear'];
            }
        }
        if (isset($_POST['selectsem'])) {
            $Ssem = $_POST["selectsem"];
            if ($Scourse === "") {
                $Serrsem = "Please select an semester";
            } else {
                $selectsem = $_POST['selectsem'];
            }
        }
        //student section
        if (isset($_POST['section']) && !empty($_POST['section']) && trim($_POST['section'])) {
            $Ssection = trim($_POST['section']);
            if (!preg_match('/^[A-Z]+$/', $Ssection)) {
                $error++;
                $stderrsection = 'section word should be In Uppercase';
            }
        } else {
            $error++;
            $stderrsection = 'Enter your section';
        }
    
        //student registration no.
        if (isset($_POST['regno']) && !empty($_POST['regno']) && trim($_POST['regno'])) {
            $Sregister = trim($_POST['regno']);
            if (!preg_match('/^[0-9]+/', $Sregister)) {
                $error++;
                $stderrreg = 'registration No. should be interger';
            }
        } else {
            $error++;
            $stderrreg = 'Enter your registration No.';
        }
    
        //rollno
        if (isset($_POST['rollno']) && !empty($_POST['rollno']) && trim($_POST['rollno'])) {
            $Sroll = trim($_POST['rollno']);
            if (filter_var($Sroll, FILTER_VALIDATE_INT) == false) {
                $error++;
                $stderrroll = 'Roll No. should be interger';
            }
        } else {
            $error++;
            $stderrroll = 'Enter your roll No.';
        }
    
        //address
        if (isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])) {
            $Saddress = trim($_POST['address']);
            if (!preg_match('/^[A-Za-z0-9\s\.,#\-]+$/', $Saddress)) {
                $error++;
                $stderraddress = 'invalid address';
            }
        } else {
            $error++;
            $stderraddress = 'Enter your address';
        }
    
        //student gender
        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
        } else {
            $error++;
            $stderrgender = "Choose your gender";
        }
        //image upload
    include '../registration form/image_upload.php';

    
        if ($error == 0) {
            echo '<script>alert("updated ");</script>';
        } else {
            echo '<script>alert("check the error ");</script>';
    
        }   
        if ($error == 0) {
            include '../database and tables/create_database.php';
            include '../database and tables/Student_table.php';
            include '../database and tables/insert_student.php';
            $update_query = "UPDATE student_table SET Name='$stdname' , Email='$Semail', Phone='$Sphone', DOB='$Sdob', course_type='$courseType', std_course='$Scourse', year='$Syear', semecter='$Ssem', section='$Ssection', RegsitrationNo = '$Sregister', RollNo='$Sroll', address='$address', Gender='$gender', image='$image',  WHERE id=$id";
            if (mysqli_query($connect, $update_query)) {
                echo "Record updated successfully.";
                header("location:5.1_form_list.php");
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration form</title>
    <link rel="stylesheet" href="../registration form/registration_css.css" />
</head>
<body>
    <!--student registration-->
    <div>
        <form id="id_std_register" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
            <span class="std_regclose" onclick="hidestdreg()">&times;</span>
            <h1>Student regestration panel</h1>
            <div>
                <label class="stdreglbl" id="stdname" for="idstdinputname">Student name:</label>
                <input type="text" class="stdregister" id="idstdinputname" name="stdinputname" placeholder="enter your full name" value="<?php echo $student_data['Name']; ?>"/>
                <span class="reg_err" id="std_reg_name_err"><?php echo isset($stderrName)?$stderrName:'' ?></span>
            </div>
            <div>
                <label class="stdreglbl" id="stdemail" for="idstdemail" >student email:</label>
                <input type="email" class="stdregister" id="idstdemail" name="stdemail" value="<?php echo $student_data['Email']; ?>" placeholder="enter your eamil" />
                <span class="reg_err" id="std_reg_email_err"><?php echo isset($stderremail)?$stderremail:'' ?></span>
            </div>
            <div>
                <label class="stdreglbl" id="stdphone" for="idstdphone"> Phone number:</label>
                <input type="number" class="stdregister" id="idstdphone" name="stdphone"placeholder="student contact number" value="<?php echo $student_data['Phone']; ?>"/>
                <span class="reg_err" id="std_reg_name_err"><?php echo isset($stderrphone)?$stderrphone:'' ?></span>
            </div>
            
            <div>
                <label class="stdreglbl" id="iddob" for="idstddob">Student DOB:</label>
                <input type="date" class="stdregister" id="idstddob" name="date" placeholder="enter student's date of birth" value="<?php echo $student_data['DOB']; ?>"/>
                <span class="reg_err" id="std_reg_dob_err"><?php echo isset($stderrdate)?$stderrdate:'' ?></span>
            </div>
            
            <div>
                <label class="stdreglbl" id="idstd_course_type_lbl">select course type:</label>
                <div class="outstd_course_typer">
                    yearly<input type="radio" class="stdcourse_type" id="idstdyearly" name="courseType" onclick="yearlycourse()"/>
                    semester wise<input type="radio" class="stdcourse_type" id="idstdsem_wise" name="courseType" onclick="semcourse()"/>  
                    <span class="reg_err" id="std_reg_Ctype_err"><?php echo isset($stderrCtype)?$stderrCtype:'' ?></span>
                </div>
            </div>
            <div class="selectcourse">
                <div>
                    <label class="stdcourselbl" id="idstdcourseyear" for="idselectyear">choose course</label>
                    <label class="stdcourselbl" id="idstdyear" for="idselectyear">Select year</label>
                    <label class="stdcourselbl" id="idstdsem" for="idselectsem">select semester(if semester)</label>
                </div>
                <div>
                    <select id="idselectcourse" name="selectcourse" value="<?php echo $student_data['std_course']; ?>">
                        <option value="" >select course</option>
                        <option value="BCA"<?php if($student_data['year'] == "BCA") echo "selected" ?>>BCA</option>
                        <option value="BBA"<?php if($student_data['year'] == "BBA") echo "selected" ?>>BBA</option>
                        <option value="BIT"<?php if($student_data['year'] == "First year") echo "selected" ?>>BIT</option>
                        <option value="BSCsIT"<?php if($student_data['year'] == "BSCsIT") echo "selected" ?>> Bsc.CSIT</option>
                        <option value="BBS"<?php if($student_data['year'] == "BBS") echo "selected" ?>> BBS</option>
                        <option value="BA"<?php if($student_data['year'] == "BA") echo "selected" ?>>BA</option>
                    </select>
                    <select id="idselectyear" name="selectyear" value="<?php echo $student_data['year']; ?>">
                        <option  value=" " >select year</option>
                        <option value="first year"<?php if($student_data['year'] == "First year") echo "selected" ?>>first year</option>
                        <option value="second year"<?php if($student_data['year'] == "second year") echo "selected" ?>>second year </option>
                        <option value="third year"<?php if($student_data['year'] == "third year") echo "selected" ?>>third year </option>
                        <option value="fourth year"<?php if($student_data['year'] == "fourth year") echo "selected" ?>> fourth year</option>
                    </select>
                    <select id="idselectsem" name="selectsem">
                        <option value=" ">select semester</option>
                        <option value="First semester"<?php if($student_data['semester'] == "First semester") echo "selected" ?>>first semester</option>
                        <option value="second semester"<?php if($student_data['semester'] == "second semester") echo "selected" ?>>second semester</option>
                        <option value="third semester"<?php if($student_data['semester'] == "third semester") echo "selected" ?>>third semester</option>
                        <option value="third semester"<?php if($student_data['semester'] == "third semester") echo "selected" ?>> fourth semester</option>
                        <option vvalue="fifth semester"<?php if($student_data['semester'] == "fifth semester") echo "selected" ?>>fifth semester</option>
                        <option value="sixth semester"<?php if($student_data['semester'] == "sixth semester") echo "selected" ?>>sixth semester </option>
                        <option value="seventh semester"<?php if($student_data['semester'] == "seventh semester") echo "selected" ?>>seventh semester </option>
                        <option value="eighth semester"<?php if($student_data['semester'] == "eighth semester") echo "selected" ?>> eighth semester</option>
                    </select>
                </div>
                <span class="reg_err" id="std_reg_course_err"><?php echo isset($Serrcourse)?$Serrcourse:'' ?></span>
                <span class="reg_err" id="std_reg_year_err"><?php echo isset($Serryear)?$Serryear:'' ?></span>
                <span class="reg_err" id="std_reg_sem_err"><?php echo isset($Serrsem)?$Serrsem:'' ?></span>
            </div>
            <div>
                <label class="stdreglbl" id="idsectionlbl" for="idsection">Section:</label>
                <input type="text" class="stdregister" id="idsection" name="section" placeholder="enter section" value="<?php echo  $student_data['section']; ?>"/>
                <span class="reg_err" id="std_reg_sec_err"><?php echo isset($stderrsection)?$stderrsection:'' ?></span>
            </div>
            <div>
                <label class="stdreglbl" id="idregnolbl" for="idregno">Registration No.:</label>
                <input type="number" class="stdregister" id="idregno" name="regno" placeholder="enter registration No." value="<?php echo $student_data['RegistrationNo']; ?>"/>
                <span class="reg_err" id="std_reg_regno_err"><?php echo isset($stderrreg)?$stderrreg:'' ?></span>
            </div>
            <div>
                <label class="stdreglbl" id="idrolllbl"for="idrollno">Roll No.:</label>
                <input type="number" class="stdregister" id="idrollno" name="rollno" placeholder="enter calss roll No." value="<?php echo $student_data['RollNo']; ?>"/>
                <span class="reg_err" id="std_reg_roll_err"><?php echo isset($stderrroll)?$stderrroll:'' ?></span>
            </div>
            <div>
                <label class="stdreglbl" id="idstdadrslbl"for="idstdadrs">Address:</label>
                <input type="text" class="stdregister" id="idstdadrs" name="address" placeholder="enter temporary address" value="<?php echo $student_data['address']; ?>"/>
                <span class="reg_err" id="std_reg_adres_err"><?php echo isset($stderraddress)?$stderraddress:'' ?></span>
            </div>
             <div>
                <label class="stdreglbl" id="idstdgenderlbl" for="std_gen">Student gender:</label>
                <div class="outstdgender" id="std_gen">
                    Male<input type="radio" class="stdgender" id="idstdmale" name="gender" value="Male" value="<?php echo $student_data['Gender']; ?>/>
                    Female<input type="radio" class="stdgender" id="idstdfemale" name="gender" value="Female" value="<?php echo $student_data['Gender']; ?>/>
                    Others<input type="radio" class="stdgender" id="idstdothers" name="gender" value="others"  value="<?php echo $student_data['Gender']; ?>/>
                    <span class="reg_err" id="std_reg_gen_err"><?php echo isset($stderrgender)?$stderrgender:'' ?></span>
                </div>
            </div>
            <div>
                <label for="ppimage">Image : </label>
                <input type="file" name="ppimage" id="ppimage" class="stdregister" value="<?php echo (isset($_FILES['ppimage']))?$_FILES['ppimage']:'' ?>"/>
                <span class="reg_err" id="std_reg_img_err">
                    <?php echo isset($std_img_err) ? $std_img_err : '' ?>
                </span>
            </div>
            <div>
                <button class="stdregclick" name="std_reg_cancel" id="idstdregcancel" onclick="stdregcancel()">cancel</button>
                <button class="stdregclick" name="std_regclk" id="idstdregsubmit" onclick="stdregsubmit()">Update</button>
            </div>
        </form>
    </div>
    <script src="register_script.js"></script>
</body>
</html>