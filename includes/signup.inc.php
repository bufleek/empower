<?php

if (isset($_POST['submit'])) {
    
    include_once '../includes/dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd_2 = mysqli_real_escape_string($conn, $_POST['pwd_2']);
    $adm = mysqli_real_escape_string($conn, $_POST['adm']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    

    //error handlers
    //check for empty fields
    if (empty($first) || empty($last) || empty($email)  || empty($pwd) || empty($pwd_2) || empty($adm) || empty($class)) {
        header("location: ../admin/signup_stud.php?error=empty_fields");
        exit();
    }else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("location: ../admin/signup_stud.php?error=invalid_characters");
            exit();
        }else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../admin/signup_stud.php?error=invalid_email");
                exit();
            }else {
                $uid = $first . "" . $adm;
                //check if username has been used
                $sql = "SELECT * FROM students WHERE username='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("location: ../admin/signup_stud.php?error=usertaken");
                    exit();
                }else {
                    //check if passwords match
                    if ($pwd !== $pwd_2) {
                        header("location: ../admin/signup_stud.php?error=upi_mismatch");
                        exit();
                    }else {
                    //hashing the password
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO students (adm_no, first_name, last_name, class, UPI, username, email, phone, password, photo) VALUES ('$adm', '$first', '$last', '$class', '$pwd_2', '$uid', '$email', '$phone', '$hashedpwd', 'studentimages/$adm.jpg');";
                    mysqli_query($conn, $sql);
                    echo "succesfully signed up";
                    header("location: ../admin/signup_stud.php?signup=success");
                    exit();
                }
            }
          }
        }
    }

}else {
    header("location: ../index.html");
    exit();
}