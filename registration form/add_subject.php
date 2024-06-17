<?php
    include("add_subject_validate.php");
    include ("../title bar/title_bar.php");
     include ("../title bar/menu_bar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add subject</title>
    <link rel="stylesheet" href="add_subjectcss.css">
    <link rel="stylesheet" href="../title bar/menu_barcss.css">
    <link rel="stylesheet" href="../title bar/title_bar_css.css">
</head>

<body>
    <!--teacher attendenca file create form-->
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" id="subject_add_form" >
        <div class="teacher_choose" id="id_teacher_choose">
            <span class="teach_create_hide" onclick="hideteachcreate()">&times;</span>
            <h1>Teacher calss create panel</h1>
            <label class="teach_chooselbl">Choose your course:</label>
            <div>
                <select id="idselect_teach_course" class="tech_choose_option" name="add_sub_course" value="<?php echo isset($sub_course)?$sub_course:'';?>">
                    <option value=" " disabled selected>select course</option>
                    <option value="BCA">BCA</option>
                    <option value="BIT">BIT</option>
                    <option value="BBA">BBA</option>
                    <option value="BBS"> BBS</option>
                    <option value="BSC.CSIT"> Bsc.CSIT</option>
                    <option value="BA">BA</option>
                </select>
                <span class="create_sub_err" id="create_sub_course_err"><?php echo isset($sub_course_err)?$sub_course_err:'' ?></span>
            </div>
            <div class="tech_choose_option" id="type_choose_opt" name="add_sub_course_type">
                <label class="stdreglbl" id="idcourse_type_create_lbl">select course type:</label>
                <div class="outstd_course_typer" name="add_sub_type">
                    yearly<input type="radio" class="stdcourse_type" id="idstdyearly_create" name="course_type_radio"
                        onclick="yearlycreate()" value="yearly"/>
                    semester wise<input type="radio" class="stdcourse_type" id="idstdsem_create" name="course_type_radio"
                        onclick="semcreate()" value="semester wise"/>
                    <span class="create_sub_err" id="create_sub_type_err"><?php echo isset($sub_type_err)?$sub_type_err:'' ?></span>
                </div>
            </div>
            <label class="teach_chooselbl">Choose year:</label>
            <div>
                <select id="idselect_teach_year" class="tech_choose_option" name="add_sub_year">
                    <option value=" " disabled selected>select year</option>
                    <option value="first year">first year</option>
                    <option value="second year">second year </option>
                    <option value="third year">third year </option>
                    <option value="fourth year"> fourth year</option>
                </select>
                <span class="create_sub_err" id="create_sub_year_err"><?php echo isset($sub_year_err)?$sub_year_err:'' ?></span>
            </div>
            <label class="teach_chooselbl" id="idcreate_semlbl">Choose your semester:</label>
            <div>
                <select id="idselect_teach_sem" class="tech_choose_option" name="add_sub_sem">
                    <option value=" " disabled selected>select semester</option>
                    <option value="first semester" <?php if (strcasecmp(trim($sub_sem), "First semester") == 0) echo "selected" ?>>first semester</option>

                    <option value="second semester" <?php if($sub_sem == "First semester") echo "selected" ?>>second semester</option>
                    <option value="third semester" <?php if($sub_sem == "First semester") echo "selected" ?>>third semester</option>
                    <option value="fourth semester"<?php if($sub_sem == "First semester") echo "selected" ?>> fourth semester</option>
                    <option value="fifth semester"<?php if($sub_sem == "First semester") echo "selected" ?>>fifth semester</option>
                    <option value="sixth semester" <?php if($sub_sem == "First semester") echo "selected" ?>>sixth semester </option>
                    <option value="seventh semester" <?php if($sub_sem == "First semester") echo "selected" ?>>seventh semester </option>
                    <option value="eighth semester" <?php if($sub_sem == "First semester") echo "selected" ?>> eighth semester</option>
                </select>
                <span class="create_sub_err" id="create_sub_sem_err"><?php echo isset($sub_sem_err)?$sub_sem_err:'' ?></span>
            </div>
            <label class="teach_chooselbl">Enter section:</label>
            <div>
                <input type="text" id="idteach_section" class="tech_choose_option"
                    placeholder="enter section to create" name="add_sub_sec" value="<?php echo $sub_sec;?>">
                <span class="create_sub_err" id="create_sub_sec_err"><?php echo isset($sub_sec_err)?$sub_sec_err:'' ?></span>
            </div>
            <label class="teach_chooselbl">Enter subject:</label>
            <div>
                <input type="text" id="idteach_subject" class="tech_choose_option"
                    placeholder="enter your subject name " name="add_sub_sub" value="<?php echo $subject;?>">
                <span class="create_sub_err" id="create_sub_name_err"><?php echo isset($sub_err)?$sub_err:'' ?></span>
            </div>
            <label class="teach_chooselbl">Enter subject code:</label>
            <div>
                <input type="text" id="idteach_subjectcode" class="tech_choose_option"
                    placeholder="enter your subject code " name="add_sub_code" value="<?php echo $sub_code;?>">
                <span class="create_sub_err" id="create_sub_code_err"><?php echo isset($sub_code_err)?$sub_code_err:'' ?></span>
            </div>
            <button class="teacher_choosebtn" id="idteacher_backbtn" onclick="teachbackbtn()" >back</button>
            <button class="teacher_choosebtn" id="teacher_createbtn" name="add_subjects" onclick="createclass()">create</button>
        </div>
    </form>
    <script src="add_subjectjs.js"></script>
    <script src="../title bar/menu_barjs.js"></script>
</body>

</html>