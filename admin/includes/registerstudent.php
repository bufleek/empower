<?php

if (isset($_POST['submit'])) {
    
    include_once '../db.php';

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
//check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("location: ../signup_stud.php?error=invalid_characters");
            exit();
        }else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../signup_stud.php?error=invalid_email");
                exit();
            }else {
                $uid = $first . "" . $adm;
                //check if username has been used
                $sql = "SELECT * FROM students WHERE username='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("location: ../signup_stud.php?error=usertaken");
                    exit();
                }else {
                    //check if passwords match
                    if ($pwd !== $pwd_2) {
                        header("location: ../signup_stud.php?error=password_mismatch");
                        exit();
                    }else {
                    //hashing the password
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO students (adm_no, first_name, last_name, class, UPI, email, phone, password, photo) VALUES ('$adm', '$first', '$last', '$class', '$pwd_2', '$email', '$phone', '$hashedpwd', 'studentimages/$adm.jpg');";
                    mysqli_query($conn, $sql);
                    echo "succesfully signed up";
                    header("location: ../signup_stud.php?signup=success");
                    exit();
                }
            }
          }
        }


}else {
    header("location: ../signup_stud.php");
    exit();
}