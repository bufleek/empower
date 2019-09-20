<link rel="stylesheet" href="../static/css/tables.css">

<link rel="stylesheet" href="../static/css/admin_styling.css">
<?php
define('config_include', TRUE);
include('../incs/nav.php');
include('../incs/head.php');

?>
<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if (isset($_GET['delpost'])) {

    $stmt = $db->prepare('DELETE FROM posts WHERE postID = :postID');
    $stmt->execute(array(':postID' => $_GET['delpost']));

    header('Location: posts.php?action=deleted');
    //exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel | Manage Posts</title>

    <script language="JavaScript" type="text/javascript">
    function delpost(id, title) {
        if (confirm("Are you sure you want to delete '" + title + "'")) {
            window.location.href = 'posts.php?delpost=' + id;
        }
    }
    </script>
</head>

<body>
    <div class="container dashboard">

        <div id="wrapper">



            <?php
            //show message from add / edit page
            if (isset($_GET['action'])) {
                echo '<h3>Post ' . $_GET['action'] . '.</h3>';
            }
            ?>

            <table id="myTable">
                <tr class="header">
                    <th>Title</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                try {

                    $stmt = $db->query('SELECT * FROM posts ORDER BY postID DESC');
                    while ($row = $stmt->fetch()) {

                        echo '<tr>';
                        echo '<td>' . $row['postTitle'] . '</td>';

                        echo '<td>' . date('jS M Y', strtotime($row['postDate'])) . '</td>';
                        ?>

                <td>
                    <a href="edit-post.php?id=<?php echo $row['postID']; ?>" class="edit">Edit</a>
                </td>
                <td>
                    <a href="javascript:delpost('<?php echo $row['postID']; ?>','<?php echo $row['postTitle']; ?>')"
                        class="delete">Delete</a>
                </td>

                <?php
                        echo '</tr>';
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                ?>
            </table>

            <div class="buttons">
                <p><a href='add-post.php'>Add Post</a></p>

            </div>
        </div>
    </div>

</body>

</html>