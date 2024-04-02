
/*teacher entities display section */
let doc= document.getElementById('idteacher_btn');
document.getElementById('Dash_entities').style.float ='inline-start';
if(doc.style.display = 'none'){
    document.getElementById('Dash_entities').style.width ='100%' ;
}
else{
    document.getElementById('Dash_entities').style.width ='80%' ;
   
}


function change_course(){
    let dropcourse = document.getElementById('course_dropdown');
    let dropyear = document.getElementById('year_dropdown');
    let dropsem = document.getElementById('sem_dropdown');
    let dropsec = document.getElementById('sec_dropdown');
    let selecttype = dropyear.value;
    dropsem.innerHTML=" ";
    dropsec.innerHTML=" ";
    if(selecttype == "value_year1"){
        addOption(dropsem, "value_sem1", "sec A");
        
    }
    else if(selecttype == "value_year2"){
        addOption(dropsem, "value_sem3", "value_sem4");
    }
    else if(selecttype == "value_year3"){
        addOption(dropsem, "value_sem5", "value_sem6");
    }
    else if(selecttype == "value_year4"){
        addOption(dropsem, "value_sem7", "value_sem8");
    }
}
function addOption(selectElement, value, text){
    var option = document.createElement("option");
    option.value = value;
    option.text = text;
    selectElement.add(option);
}


function course_type_see(){
    let dropcoursetype = document.getElementById('id_course_type_see');
    let coursetype = dropcoursetype.value;
    if(coursetype === "value_choose_yearly"){
        document.getElementById('sem_dropdown').style.display = 'none';
        
    }
    else if(selecttype == "value_choose_sem"){
        document.getElementById('sem_dropdown').style.display = 'inline';
    }
}
