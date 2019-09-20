<?php
session_start();

?>
<?php
    if (isset($_SESSION['u_id'])) {              
              echo '';
    }else {
        header("location: login.php?error=invalid");
         exit();
        
        
    }
    ?>
		<!--==================navigation===============-->
<!--====overlay nav===-->
		
		<div class="nav-section">
					<div id="myNav" class="overlay">
						 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a>
						 <div class="overlay-content">
					  <a onclick="location.href='dashboard.php'"><i class="fa fa-home"></i>Home </a>
					  <a onclick="location.href='users.php'">Admins </a>
					  <a onclick="location.href='dispstaff.php'">Staff </a>
					  <a onclick="location.href='dispstudents.php'">Students </a>
					  <a onclick="location.href='posts.php'">Posts </a>
					  <a onclick="location.href='files.php'">Downloads </a>
					  <a>
					 <form action="logout.php" method="post" >
                <input type="submit" name="submit" style="background-color: red; padding: 10px; border-radius:3px; " value="Log Out!">
               </form></a>
						</div>
						</div>
					<span class="openbtn" style="font-size:30px; cursor:pointer"
					onclick="openNav()">&#9776;</span>
					
					<div class="admin-pan-btns">
					<ul>
					<li><input type="button" onclick="location.href='dashboard.php'" value="Home" /></li>
					<li>
					</li>
					</ul>
					</div>
							
		<!--end nav-->
		</div>
		
	<div class="top-header">
	<div class="post-header">
		 <div class="logo-container">
			  <img src="../imgs/logo.jpg" alt="logo" class="logo">
		 </div>
		<p class="school-name">Kapchelach Secondary School.</p>
	</div>
	</div>

<!DOCTYPE html>
<link rel="stylesheet" href="../static/css/public_styling.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/overlay.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
<script src="../js/overlay.js"></script>
<title>Kapchelach Secondary | Admin Panel</title>