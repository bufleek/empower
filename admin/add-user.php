<?php
define('config_include', TRUE);
include('../incs/nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/tables.css">
    <link rel="icon" href="../imgs/logo.jpg">
    <title>Add Admin | EPOK Admin</title>

</head>

<body>
    <div class="pre_form">
        <a href="users.php">View Registered Admins</a>
    </div>

    <div class="sign">

        <form action="../incs/sign_admin.inc.php" method="POST">
            <h2>ADD ADMIN</h2>
            <?php
            if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {
                    echo '<p class="success">Registered Sucessfully<a href="users.php">View Admins</a></p>';
                }
            } elseif (isset($_GET['error'])) {
                if ($_GET['error'] == "empty_fields") {
                    echo '<p class="error">Please fill out all the fields</p>';
                } elseif ($_GET['error'] == "invalid_characters") {
                    echo '<p class="error">Use valid characters for First and Last name</p>';
                } elseif ($_GET['error'] == "invalid_email") {
                    echo '<p class="error">Use a valid E-mail address</p>';
                } elseif ($_GET['error'] == "usertaken") {
                    echo '<p class="error">User already exists</p>';
                } elseif ($_GET['error'] == "pwd_mismatch") {
                    echo '<p class="error">Passwords dont match</p>';
                }
            }
            ?>
            <label>USERNAME</label> <input type="text" name="username" placeholder="Enter Username">
            <label>FIRST NAME</label><input type="text" name="first" placeholder="Enter First Name">
            <label>LAST NAME</label> <input type="text" name="last" placeholder="Enter Last Name">
            <label>E-MAIL</label><input type="text" name="email" placeholder="Enter Email">
            <label>PASSWORD</label><input type="password" name="pwd" placeholder="Enter Password">
            <label>CONFIRM PASSWORD</label> <input type="password" name="pwd_2" placeholder="Confirm Password">
            <label>ROLE</label> <input type="text" name="role" placeholder="Role">
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>


</body>
<footer>
    <?php include('../includes/footer.php');
    ?>
</footer>

</html>