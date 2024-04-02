<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/Teacher_dashboard_css.css">
<link rel="stylesheet" href="CSS/Dashboard_css.css">
<link rel="stylesheet" href="CSS/button_css.css" />
<link rel="stylesheet" href="CSS/task_bar_css.css" />
<link rel="stylesheet" href="CSS/search_bar_css.css" />
<link rel="stylesheet" href="CSS/Admin_Dashboard_css.css" />
<title>teacher login for dashborad</title>
</head>

<body>
<!--teacher top bar-->
    <div id="idteach_enter_dash">
        <div id="idtech_topbar">
            <div class="teacher_task_open" id="idteacher_task_open" onclick="teachertaskopen()">Task section</div>
            <div class="teacher_course_type">
                <select id="course_dropdown" class="teacher_see_std" onchange="change_course()">
                    <option value=" " disabled selected >see course</option>
                    <option value="value_bca">BCA</option>
                    <option value="value_bit">BIT</option>
                    <option value="value_bba">BBA</option>
                    <option value="value_bbs"> BBS</option>
                    <option value="value_bcscsit"> Bsc.CSIT</option>
                    <option value="value_ba">BA</option>
                </select>
                <select name="" id="id_course_type_see" class="teacher_see_std" onchange="course_type_see()">
                    <option value="" disabled selected>choose course type</option>
                    <option value="value_choose_yearly">yearly</option>
                    <option value="value_choose_sem">semester wise</option>
                </select>
                <select id="year_dropdown" class="teacher_see_std" onchange="change_year()">
                    <option value=" " disabled selected>see year</option>
                    <option value="value_year1">first year</option>
                    <option value="value_year2">second year </option>
                    <option value="value_year3">third year </option>
                    <option value="value_year4"> fourth year</option>
                </select> 
                <select id="sem_dropdown" class="teacher_see_std" onchange="change_sem()">              
                    <option value=" " disabled selected>see semester</option>                    
                    <option value="value_sem1">first semester</option>
                    <option value="value_sem2">second semester</option>
                    <option value="value_sem3">third semester</option>
                    <option value="value_sem4"> fourth semester</option>
                    <option value="value_sem5">fifth semester</option>
                    <option value="value_sem6">sixth semester </option>
                    <option value="value_sem7">seventh semester </option>
                    <option value="value_sem8"> eighth semester</option>
                </select>
                <select id="sec_dropdown" class="teacher_see_std" onchange="change_sec()">
                    <option value=" " disabled selected>see section</option>
                    <option value="value_secA">A</option>
                    <option value="value_secB">B</option>
                    <option value="value_secC">C</option>
                </select>
            </div>
            <!--teachers pfofile part-->
          <div id="idteacher_profile_part">
                <div id="idteacher_pic_part">
                    <div id="idprofile_picture"></div>   
                    <div id="idprofile_text">Teacher</div>
                    <img src="images/teacher profile.png" alt="" class="teacherPP">
                </div>
          </div>  
        </div>
       
    </div>
 


    <!--teacher task bar-->
    <div class="teachertask" id="idteachertask">
        <span class="teach_task_hide" onclick="hide_task_open()">&times;</span>
        <!--<img class="teacher_task_img" src="images/teacherdsh-color.png">-->
        <div id="dashborder">
            <button class="Dashboard_section" id="iddashboard_sec" onclick="dashboardclick()">Dashboard</button>
        </div>
        <!--
        <div class="teacher_manage_section" id="idteacher_section">
            <button class="teacher_section" onclick="teacherbtn()">Teachers Section</button>
            <div id="idteacher_btn">
                <span class="teachersec_hide" onclick="hideteachsec()">&times;</span>
                <button class="addteacher" onclick="addteacher()">Add teachers</button>
                <button class="addteacher" onclick="removeteacher()">remove teachers</button>
            </div>
        </div>
        -->
        <div class="teacher_manage_section" id="idstd_section">
            <button class="std_section" onclick="stdbtn()">Student Section</button>
            <div id="idstd_btn">
                
                <button class="addstd" onclick="addstudent()">Add Student</button>
                <button class="addstd" onclick="removestudent()">remove Student</button>
            </div>
        </div>
        <div class="teacher_manage_section" id="idsubject_section">
            <button class="subject_section" onclick="subjectbtn()">Add subject</button>
        </div>
    </div>

    <!--search bar -->
    <div class="searchbar">
        <input type="search" class="search" id="idteacher_search" name="things" placeholder="Search here anything relate to attendance">
        <button type="search" class="search_click" id="idteacher_search_click" >search</button>
    </div>

    <div class="Dash_entities" id="idteacher_dash_entities">
        <div class="entities">
            <button class=" adminentity" id="">courses()</button>
            <img src="images/attendance pic.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">years()</button>
            <img src="images/attendance pic.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">semesters()</button>
            <img src="images/attendance pic.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">sections()</button>
            <img src="images/attendance pic.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">All students()</button>
            <img src="images/all student.jpg" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">Female students()</button>
            <img src="images/female student.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">Male students()</button>
            <img src="images/male student.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">present studnts()</button>
            <img src="images/present student.png" class="admindashpic" id="">
        </div>
        <div class="entities">
            <button class="adminentity" id="">Absent studnts()</button>
            <img src="images/absent stundet.png" class="admindashpic" id="">
        </div>
    </div>



    <!--teacher attendenca file create form-->
    <div class="teacher_choose" id="id_teacher_choose">
        <span class="teach_create_hide" onclick="hideteachcreate()">&times;</span>
        <h1>Teacher calss create panel</h1>
        <label class="teach_chooselbl">Choose your course:</label>
        <div>
            <select id="idselect_teach_course" class="tech_choose_option">
                <option value=" " disabled selected>select course</option>
                <option value="value_add_bca">BCA</option>
                <option value="value_add_bit">BIT</option>
                <option value="value_add_bba">BBA</option>
                <option value="value_add_bbs"> BBS</option>
                <option value="value_add_bsc"> Bsc.CSIT</option>
                <option value="value_add_ba">BA</option>
            </select>
            <span class="create_sub_err" id="create_sub_course_err"></span>
        </div>
        <div class="tech_choose_option" id="type_choose_opt">
            <label class="stdreglbl" id="idcourse_type_create_lbl">select course type:</label>
            <div class="outstd_course_typer">
                yearly<input type="radio" class="stdcourse_type" id="idstdyearly_create" name="course" onclick="yearlycreate()"/>
                semester wise<input type="radio" class="stdcourse_type" id="idstdsem_create" name="course" onclick="semcreate()"/>  
                <span class="create_sub_err" id="create_sub_type_err"></span>
            </div>
        </div>
        <label class="teach_chooselbl">Choose year:</label>
        <div>
            <select id="idselect_teach_year" class="tech_choose_option">
                <option value=" " disabled selected>select year</option>
                <option value="value_add_year1">first year</option>
                <option value="value_add_year2">second year </option>
                <option value="value_add_year3">third year </option>
                <option value="value_add_year4"> fourth year</option>
            </select>
            <span class="create_sub_err" id="create_sub_year_err"></span>
        </div>
        <label class="teach_chooselbl" id="idcreate_semlbl">Choose your semester:</label>
        <div>
            <select id="idselect_teach_sem" class="tech_choose_option">
                <option value=" " disabled selected>select semester</option>
                <option value="value_add_sem1">first semester</option>
                <option value="value_add_sem2">second semester</option>
                <option value="value_add_sem3">third semester</option>
                <option value="value_add_sem4"> fourth semester</option>
                <option value="value_add_sem5">fifth semester</option>
                <option value="value_add_sem6">sixth semester </option>
                <option value="value_add_sem7">seventh semester </option>
                <option value="value_add_sem8"> eighth semester</option>
            </select>
            <span class="create_sub_err" id="create_sub_sem_err"></span>
        </div>
        <label class="teach_chooselbl">Enter section:</label>
        <div>
            <input type="text" id="idteach_section" class="tech_choose_option" placeholder="enter section to create">
            <span class="create_sub_err" id="create_sub_sec_err"></span>
        </div>
        <label class="teach_chooselbl">Enter subject:</label>
        <div>
            <input type="text" id="idteach_subject" class="tech_choose_option" placeholder="enter your subject name ">
            <span class="create_sub_err" id="create_sub_name_err"></span>
        </div>
        <button class="teacher_choosebtn" id="idteacher_backbtn" onclick="teachbackbtn()">back</button>
        <button class="teacher_choosebtn" id="teacher_createbtn" onclick="createclass()">create</button>
    </div>

    
    <script src="Admin_Dashboard_js.js"></script>
    <script src="teacher_create_attendance_js.js"></script>
</body>

</html>