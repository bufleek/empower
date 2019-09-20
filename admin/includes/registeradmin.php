<?php

if (isset($_POST['submit'])) {

    include_once '../db.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd_2 = mysqli_real_escape_string($conn, $_POST['pwd_2']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);


    //error handlers
    //check for empty fields
    //check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $username)) {
        header("location: ../add-user.php?error=invalid_characters");
        exit();
    } else {
        //check if username has been used
        $sql = "SELECT * FROM admins WHERE $username='username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 2) {
            header("location: ../add-user.php?error=usertaken");
            exit();
        } else {
            //check if passwords match
            if ($pwd !== $pwd_2) {
                header("location: ../add-user.php?error=password_mismatch");
                exit();
            } else {
                //hashing the password
                $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                //insert the user into the database
                $sql = "INSERT INTO admins (username, email, password, first_name, last_name, role) VALUES ('$username', '$email', '$hashedpwd', '$first', '$last', '$role');";
                mysqli_query($conn, $sql);
                header("location: ../add-user.php?signup=success");
                exit();
            }
        }
    }
} else {
    header("location: ../add-user.php");
    exit();
}