<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin-log.css">
    <link rel="icon" href="../imgs/logo.jpg">
    <title>Login | EPOK Admin</title>
</head>

<body>
    <div id="login">

        <div id="form-container">
            <div class="log-form">
                <form action="login_admin.inc.php" method="POST">

                    <h2><u>EPOK</u></h2>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "wrong") {
                            echo '<p class="error">Wrong Password</p>';
                        } elseif ($_GET['error'] == "empty") {
                            echo '<p class="error">Please fill out all the fields</p>';
                        } elseif ($_GET['error'] == "null") {
                            echo '<p class="error">No such username</p>';
                        } elseif ($_GET['error'] == "invalid") {
                            echo '<p class="error">You Must login to proceed!. This is a restricted area</p>';
                        }
                    } elseif (isset($_GET['login'])) {
                        if ($_GET['login'] == "error") {
                            echo '<p class="error">You must login first</p>';
                        }
                    } elseif (isset($_GET['logout'])) {
                        if ($_GET['logout'] == "success") {
                            echo '<p class="error">You are logged out successfully</p>';
                        }
                    }

                    ?>
                    <h2>ADMIN LOG<font color="green">IN</font>
                    </h2>
                    <hr style="opacity:0.4;">

                    <div class="inputbox">
                        <input type="text" name="uid">
                        <label>USERNAME</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="pwd">
                        <label>PASSWORD</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn6">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        LOGIN
                    </button>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script>
        $('input').focus(function() {
            $(this).parent().addClass('active');
            $('input').focusout(function() {
                if ($(this).val() == '') {
                    $(this).parent().removeClass('active');
                } else {
                    $(this).parent().addClass('active');
                }
            })
        })
        </script>
    </div>
</body>

</html>