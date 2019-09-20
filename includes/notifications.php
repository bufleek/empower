<?php
   $connection_mysql = mysqli_connect("localhost","kapchel1_root","AllowMe!01","kapchel1_kapchelach");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT postID FROM blog_posts";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
   }
   mysqli_close($connection_mysql);
?>
 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../stud/css/notifications.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/4a2dbcb91c.js"></script>

</head>
<body>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    
        <div>
         <div id="noti_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->
                    
                    <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                    <div id="noti_Button"><i class="fas fa-bell" id="noti_button"></i></div>   
    
                    <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                    <div id="notifications">
                        <h3 id="h3">Notifications</h3>
                        <div style="height:300px;" id="viewarea">
                    <!--======updates code=======-->
		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postDate DESC');
				while($row = $stmt->fetch()){
                    echo '<div id="wrap"><div id="notif-content">';
                        echo '<div id="admin"><img src="../imgs/admin.jpg"></div>';
						echo '<h7><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</h7>';
						echo '<h6><small><i>'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</h6></small></i>';
                        echo '</a></div>';
                        
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>
</div>
                        <div class="seeAll" id="seeAll"><a href="news.php">View In News</a></div>
                    </div>
                
        </div>





        
        <script>
            $(document).ready(function () {
        
                // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
                $('#noti_Counter')
                    .css({ opacity: 0 })
                    .text('<?php printf("%d",$rowcount);?>')  // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
                    .css({ top: '-10px' })
                    .animate({ top: '-2px', opacity: 1 }, 500);
        
                $('#noti_Button').click(function () {
        
                    // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
                    $('#notifications').fadeToggle('fast', 'linear', function () {
                        if ($('#notifications').is(':hidden')) {
                            $('#noti_Button').css('background-color', 'transparent');
                        }
                        // CHANGE BACKGROUND COLOR OF THE BUTTON.
                        else $('#noti_Button').css('background-color', 'transparent');
                    });
        
                    $('#noti_Counter').fadeOut('slow');     // HIDE THE COUNTER.
        
                    return false;
                });
        
                // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
                $(document).click(function () {
                    $('#notifications').hide();
        
                    // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
                    if ($('#noti_Counter').is(':hidden')) {
                        // CHANGE BACKGROUND COLOR OF THE BUTTON.
                        $('#noti_Button').css('background-color', 'transparent');
                    }
                });
        
                $('#h3').click(function () {
                    return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
                });
            });
            $('#seeAll').click(function () {
                    return true;       // DO NOTHING WHEN CONTAINER IS CLICKED.
                })
        </script>
</body>
</html>