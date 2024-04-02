<div class="teacher_course_type">
    <select id="course_dropdown" class="teacher_see_std" onchange="change_course()">
        <option value="" disabled selected>See course</option>
        <option value="bca">BCA</option>
        <option value="bit">BIT</option>
        <!-- Add more options -->
    </select>
    <select name="" id="id_course_type_see" class="teacher_see_std" onchange="course_type_see()" disabled>
        <option value="" disabled selected>Choose course type</option>
        <option value="yearly">Yearly</option>
        <option value="semester">Semester wise</option>
    </select>
    <select id="year_dropdown" class="teacher_see_std" onchange="change_year()" disabled>
        <option value="" disabled selected>See year</option>
    </select> 
    <select id="sem_dropdown" class="teacher_see_std" onchange="change_sem()" disabled>
        <option value="" disabled selected>See semester</option>                    
    </select>
    <select id="sec_dropdown" class="teacher_see_std" onchange="change_sec()" disabled>
        <option value="" disabled selected>See section</option>
    </select>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#course_dropdown').change(function() {
            var course = $(this).val();
            if (course) {
                $.ajax({
                    url: 'get_data.php', // URL to your server-side script to fetch data
                    type: 'POST',
                    data: {course: course},
                    success: function(response) {
                        $('#year_dropdown').html(response);
                        $('#year_dropdown').prop('disabled', false);
                    }
                });
            } else {
                $('#year_dropdown').html('<option value="" disabled selected>See year</option>');
                $('#year_dropdown').prop('disabled', true);
            }
        });

        $('#id_course_type_see').change(function() {
            var courseType = $(this).val();
            var course = $('#course_dropdown').val();
            if (courseType && course) {
                $.ajax({
                    url: 'get_data.php', // URL to your server-side script to fetch data
                    type: 'POST',
                    data: {course: course, courseType: courseType},
                    success: function(response) {
                        $('#sem_dropdown').html(response);
                        $('#sem_dropdown').prop('disabled', false);
                    }
                });
            } else {
                $('#sem_dropdown').html('<option value="" disabled selected>See semester</option>');
                $('#sem_dropdown').prop('disabled', true);
            }
        });

        // Similar change handlers for year, semester, and section dropdowns
        $('#year_dropdown').change(function() {
            var year = $(this).val();
            if (year) {
                // Implement similar AJAX request to fetch data based on the selected year
            }
        });

        $('#sem_dropdown').change(function() {
            var semester = $(this).val();
            if (semester) {
                // Implement similar AJAX request to fetch data based on the selected semester
            }
        });

        $('#sec_dropdown').change(function() {
            var section = $(this).val();
            if (section) {
                // Implement similar AJAX request to fetch data based on the selected section
            }
        });
    });
</script>
