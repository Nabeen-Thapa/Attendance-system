<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#username').keyup(function () {
                var uname = $(this).val();
                // ajax call
                $.ajax('login_uname.php', {
                    data: { 'username': uname },
                    dataType: 'text',
                    method: 'post',
                    success: function (response) {
                        $('#name_err').html(response);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('#email').keyup(function () {
                var eml = $(this).val();
                // ajax call from require page
                $.ajax('login_email.php', {
                    data: { 'email': eml },
                    dataType: 'text',
                    method: 'post',
                    success: function (response) {
                        $('#email_err').html(response);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('#password').keyup(function () {
                var pwd = $(this).val();
                // ajax call
                $.ajax('login_pwd.php', {
                    data: { 'password': pwd },
                    dataType: 'text',
                    method: 'post',
                    success: function (response) {
                        $('#password_err').html(response);
                    }
                });
            });
        });
    </script>