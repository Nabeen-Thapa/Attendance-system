
//studnet attendance file sheet and and record
document.getElementById('Arecord_display').style.display='none';
document.getElementById('Afile_display').style.display='none';
//student add and delete table
function students(){
    document.getElementById('student_edit').style.display = "inline";
    document.getElementById('Arecord_display').style.display = "none";
    document.getElementById('Afile_display').style.display='none';
    document.getElementById('Aadd_display').style.display = "none";
}

//student attendance(no. of days) record file
function Arecord(){
    document.getElementById('student_edit').style.display = "inline";
    document.getElementById('Arecord_display').style.display = "inline";
    document.getElementById('Afile_display').style.display='none';
    document.getElementById('Aadd_display').style.display = "none";
}
//studnet Attendance (present and absent) file
function Afile(){
    document.getElementById('student_edit').style.display = "inline";
    document.getElementById('Arecord_display').style.display = "none";
    document.getElementById('Afile_display').style.display='inline';
    document.getElementById('Aadd_display').style.display = "none";
}
//student add form from teacher dashboard
function addstd(){
    document.getElementById('Aadd_display').style.display = "inline";
    document.getElementById('student_sheet').style.display='none';
    document.getElementById('student_record').style.display = "none";
    document.getElementById('student_edit').style.display = "none";
}