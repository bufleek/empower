<?php
    if (!defined('config_include')) {
        exit('ERROR! CANT OPEN nav.php');
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
        <li class="blank"></li>
        <li class="close" onclick="closeNav()"><p>&times;</p></li>
        <li class="link" onclick="location.href='../index.php'">Home</li>
        <li class="link" onclick="location.href='../pages/advcy.php'" id="drop-parent"  onmousemove="drop()" onmouseout="drophide()">Advocacy</li>
        <li class="adv-drop" id="adv-drop" onmousemove="drop()" onmouseout="drophide()">
        <a href="#">Advocacy</a>
        <a href="#">Community Health</a>
        <a href="#">Community Health</a>
        </li>
        <li class="link" onclick="location.href='#'">Posts & News</li>
        <li class="link" onclick="location.href='../pages/about.php'">About us</li>
        <li class="link" onclick="location.href='../index.php#contact'">Contact us</li>
        <li class="blank2"></li>
    </div>

            <!--end nav-->

    </div>
    <div class="navigation">
        <ul>
            <li><a onclick="location.href='../index.php'">Home</a></li>
            <li><a onclick="location.href='../pages/Advocacy.php'">Advocacy</a></li>
            <li><a onclick="location.href='../pages/posts.php'">Posts & News</a></li>
            <li><a onclick="location.href='../pages/about.php'">About us</a></li>
            <li><a onclick="location.href='../index.php#contact'">Contact</a></li>
        </ul>
        <hr style="opacity:0.3;" />
    </div>

    <div class="buttons">
        <button class="logbtn btn5" onclick="location.href='../index.php'" style="width: auto;">
            Home
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