<?php
$sub_course = $sub_type =$sub_year = $sub_sem =$sub_sec= $subject=$sub_code='';
// add subject form validation
if (isset($_POST["add_subjects"])) {
    $error = 0;
    //course valivation
    if (isset($_POST["add_sub_course"]) && !empty($_POST['add_sub_course']))
    {
        $sub_course = $_POST['add_sub_course']; 
    }else{
        $error++;
        $sub_course_err = 'select your course';
    }

     //course type radio button validation
     if (isset($_POST["course_type_radio"]))
     {
         $sub_type = $_POST['course_type_radio']; 
     }else{
        $error++;
         $sub_type_err = 'select your course type';
     }

    //year validation
    if (isset($_POST["add_sub_year"]) && !empty($_POST['add_sub_year']))
    {
        $sub_year = $_POST['add_sub_year']; 
    }else{
        $error++;
        $sub_year_err = 'select your year';
    }
    
    //for year id
    if($sub_year == "first year"){
        $year_id = '1';
    }
    else if($sub_year == "second year"){
        $year_id = '2';
    }
    else if($sub_year == "third year"){
        $year_id ='3';
    }
    else if($sub_year == "fourth year"){
        $year_id = '4';
    }


    //semester validation
    if (isset($_POST['add_sub_sem']) && !empty($_POST['add_sub_sem']))
    {
        $sub_sem = $_POST['add_sub_sem']; 
    }else{
        $error++;
        $sub_sem_err = 'select your semester';
    }

    //for sem id
    if($sub_sem == "first semester"){
        $sem_id ='1';
    }
    else if($sub_sem == "second semester"){
        $sem_id ='2';
    }
    else if($sub_sem == "third semester"){
        $sem_id ='3';
    }
    else if($sub_sem == "fourth semester"){
        $sem_id ='4';
    }
    else if($sub_sem == "fifth semester"){
        $sem_id ='5';
    }
    else if($sub_sem == "sixth semester"){
        $sem_id ='6';
    }
    else if($sub_sem == "seventh semester"){
        $sem_id ='7';
    }
    else if($sub_sem == "eighth semester"){
        $sem_id ='8';
    }

    //section validation
    if (isset($_POST["add_sub_sec"]) && !empty($_POST['add_sub_sec']) && trim($_POST['add_sub_sec']))
    {
        $sub_sec = $_POST['add_sub_sec']; 
    }else{
        $error++;
        $sub_sec_err = 'select your section';
    }


    //subject validation
    if (isset($_POST["add_sub_sub"]) && !empty($_POST['add_sub_sub']) && trim($_POST['add_sub_sub']))
    {
        $subject = $_POST['add_sub_sub']; 
    }else{
        $error++;
        $sub_err = 'select your subject';
    }

    //subject code validation
    if (isset($_POST["add_sub_code"]) && !empty($_POST['add_sub_code']) && trim($_POST['add_sub_code']))
    {
        $sub_code = $_POST['add_sub_code']; 
    }else{
        $error++;
        $sub_code_err = 'enter your subject code';
    }


    //database connection and insertion
    if($error == 0){
        echo '<script>alert("Subject is added");</script>';
        include '../database and tables/create_database.php';
        include '../database and tables/all_Subject_table.php';
        include '../database and tables/insert_subjects.php';
    }else{
        echo '<script>alert("check the error");</script>';
    }
}
?>
