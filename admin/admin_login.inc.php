<?php

session_start();

if (isset($_POST['submit'])) {
    include '../includes/dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    //errror handlers
    //check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("location: login.php?error=empty");
        exit();
    }else {
        $sql = "SELECT * FROM blog_members WHERE username='$uid'";
        $result = mysqli_query($conn, $sql);
        $resulCheck = mysqli_num_rows($result);
        if ($resulCheck < 1) {
            header("location: login.php?error=null");
            exit();
        }else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['password']);
                if ($hashedPwdCheck == false) {
                    header("location: login.php?error=wrong");
                    exit();
                }elseif ($hashedPwdCheck == true) {
                    //log in the user here
                    $_SESSION['u_id'] = $row['memberID'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_uid'] = $row['username'];
                    header("location: dashboard.php?login=success");
                    exit();
                }
            }
        }
    }
  
}
else {
    header("location: index.php?error=invalid");
    exit();
}