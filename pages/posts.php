<?php
define('config_include', TRUE);
require '../includes/config.php';
include '../admin/db.php';
include '../incs/root_head.php';
?>
<link rel="stylesheet" href="../css/style.css">
<div class="posts_dashboard">
    <?php

    try {

        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM posts ORDER BY postID DESC LIMIT 3');
        while ($row = $stmt->fetch()) {

            echo '<div class="post_cont">';
            echo '<h1><u><a href="viewpost.php?id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h1></u>';
            echo '<p class="time"><small><i>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p></small></i>';
            echo '<p>' . $row['postDesc'] . '</p>';
            echo '<p class="more"><a href="viewpost.php?id=' . $row['postID'] . '">Read More</a></p>';
            echo '</div><hr>';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    } ?>
</div>