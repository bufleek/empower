<?php
require('db.php');
$postID=$_REQUEST['postID'];
$query = "DELETE * FROM blog_posts WHERE postID=$postID"; 
$result = mysqli_query($con,$query) or die ( mysqli_error()); 
header('location: posts.php')
?>