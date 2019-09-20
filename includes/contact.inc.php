<?php

if (isset($_POST['submit'])) {
    include 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    if (empty($name)) {
        header("location: ../index.php?contact=empty_name&mail=$mail&subject=$subject#contact");
        exit();
    } elseif (empty($mail)) {
        header("location: ../index.php?contact=empty_mail&name=$name&subject=$subject#contact");
        exit();
    } elseif (empty($subject)) {
        header("location: ../index.php?contact=empty_subject&mail=$mail&name=$name#contact");
        exit();
    } elseif (empty($message)) {
        header("location: ../index.php?contact=empty_message&mail=$mail&subject=$subject&name=$name#contact");
        exit();
    } else {

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header("location: ../index.php?contact=email&subject=$subject&name=$name#contact");
            exit();
        } else {
            $sql = "SELECT * FROM messages";
            $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$mail', '$subject', '$message');";
            mysqli_query($conn, $sql);
            header('location: ../index.php?contact=success#contact');
        }
    }
} else {
    header('location: ../index.php?contact=invalid');
    exit();
}