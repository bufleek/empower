<?php
session_start();
if (!isset($_SESSION['u_id'])) {
    header("location: ../admin/index.php?error=invalid");
    exit();
} else {
    if (!defined('config_include')) {
     exit('ERROR! CANT OPEN nav.php');
    }
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../css/head.css" />
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous" />
</head>



<nav>
    <div class="bars">
<span class="openbtn" style="font-size:30px; cursor:pointer;
" onclick="openNav()">&#9776;</span>
            <div class="myNav" id="myNav">
        <li class="blank-nodrop"></li>
        <li class="close" onclick="closeNav()"><p>&times;</p></li>
        <li class="link"  onclick="location.href='../admin/dashboard.php'"><i class="fa fa-home"></i>Home</li>
        <li class="link" onclick="location.href='../admin/users.php'">Admins</li>
        <li class="link" onclick="location.href='../admin/posts.php'">Posts</li>
        <li class="link" onclick="location.href='../admin/downloads.php'">Downloads</li>
        <li class="link logout" onclick="location.href='../admin/logout.php'">Logout</li>
    </div>

            <!--end nav-->

    </div>
    <div class="navigation">
        <ul>
            <li><a onclick="location.href='../admin/dashboard.php'">Home</a></li>
            <li><a onclick="location.href='../admin/users.php'">Admins</a></li>
            <li><a onclick="location.href='../admin/posts.php'">Posts</a></li>
            <li><a onclick="location.href='../admin/downloads.php'">Downloads</a></li>
        </ul>
        <hr style="opacity:0.3;" />
    </div>

    <div class="buttons">
        <button class="logbtn btn5" onclick="location.href='logout.php'" style="width: auto;">
            Logout
        </button>
    </div>
</nav>

<script>
function openNav(){
    document.getElementById("myNav").style.transform="translateX(0%)";
 }
 function closeNav(){
     document.getElementById("myNav").style.transform="translateX(-100%)";
 }
 function drop(){
     document.getElementById("adv-drop").style.visibility="visible";
     document.getElementById("drop-parent").style.background="#02010fd2";
 }
  function drophide(){
     document.getElementById("adv-drop").style.visibility="hidden";
     document.getElementById("drop-parent").style.background="#02010f85";
  }
</script>