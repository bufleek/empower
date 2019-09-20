<?php

if (isset($_POST['submit'])) {
    
    include_once 'studentconnect.php';

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd_2 = mysqli_real_escape_string($conn, $_POST['pwd_2']);
    $subjects = mysqli_real_escape_string($conn, $_POST['subjects']);
    $duties = mysqli_real_escape_string($conn, $_POST['duties']);

    

    //error handlers
    //check for empty fields
  
                    //hashing the password
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO staff (firstname, lastname, email, phone, password,TSC, subjects, duties,  photo) VALUES ('$firstname', '$lastname', '$email', '$phone', '$hashedpwd', '$pwd_2', '$subjects', '$duties', 'staffimages/$pwd_2.jpg');";
                    mysqli_query($conn, $sql);
                    echo "succesfully signed up";
                    header("location: ../signup_staff.php?signup=success");
                    exit();
}
            