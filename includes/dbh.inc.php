<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "epok";

/*
$dbServername = "localhost:3306";
$dbUsername = "empowerp_bruno";
$dbPassword = "Kumbafu#001";
$dbName = "empowerp_epok";
*/

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//create the signup php script