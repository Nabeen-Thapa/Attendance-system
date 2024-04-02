
//teacher task bar display and hide
document.getElementById('idteachertask').style.display='none';
function teachertaskopen(){
    document.getElementById('idteachertask').style.display='block';
}
function hide_task_open(){
    document.getElementById('idteachertask').style.display='none';
}


// create/add attendance class form
document.getElementById('id_teacher_choose').style.display='none';
function hideteachcreate(){
    document.getElementById('id_teacher_choose').style.display='none';
}
function subjectbtn(){
    document.getElementById('id_teacher_choose').style.display='block';
}

function teachbackbtn(){
    document.getElementById('id_teacher_choose').style.display='none';
}



/*for course type select radio button*/
document.getElementById("idstdyearly_create").unChecked;
function yearlycreate(){
    let yearly = document.getElementById("idstdyearly_create");
    if(yearly.checked){
      document.getElementById("idselect_teach_sem").style.display = 'none';
      document.getElementById("idcreate_semlbl").style.display = 'none';
    }
  }
  function semcreate(){
    let sem = document.getElementById("idstdsem_create");
    if(sem.checked){
      document.getElementById("idselect_teach_sem").style.display = 'inline';
      document.getElementById("idcreate_semlbl").style.display = 'inline';
    }
  }