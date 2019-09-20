<?php

session_start();

if (isset($_POST['submit'])) {
    include 'db.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //errror handlers
    //check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("location: index.php?error=empty");
        exit();
    } else {
        $sql = "SELECT * FROM admins WHERE username='$uid'";
        $result = mysqli_query($conn, $sql);
        $resulCheck = mysqli_num_rows($result);
        if ($resulCheck < 1) {
            header("location: index.php?error=null");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['password']);
                if ($hashedPwdCheck == false) {
                    header("location: index.php?error=wrong");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //log in the user here

                    $_SESSION['u_id'] = $row['u_id'];
                    $_SESSION['u_first'] = $row['first_name'];
                    $_SESSION['u_last'] = $row['last_name'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_uid'] = $row['username'];
                    header("location: dashboard.php?login=success");
                    exit();
                }
            }
        }
    }
} else {
    header("location: index.php?error=invalid");
    exit();
}