<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../imgs/logo.jpg">
    <title>Admins | EPOK Admin</title>

    <script language="JavaScript" type="text/javascript">
    function deluser(id, title) {
        if (confirm("Are you sure you want to delete '" + title + "'")) {
            window.location.href = 'users.php?deluser=' + id;
        }
    }
    </script>
    <style>
    .table_cont {
        max-width: calc(100% - 40px);
        overflow-x: scroll;
        margin: 20px auto;
    }

    table {
        border-collapse: collapse;
        margin: auto;

    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid rgb(155, 11, 11);
    }

    th {
        text-align: center;
        background: #a94442
    }
    </style>
</head>

<body>
    <?php
    //include navbar
    define('config_include', TRUE);
    include('../incs/nav.php');
    include('../incs/head.php');

    // include config
    require_once('../includes/config.php');

    //if not logged in redirect to login page
    //if(!$user->is_logged_in()){ header('Location: login.php'); }

    //show message from add / edit page
    if (isset($_GET['deluser'])) {

        //if user id is 1 ignore
        if ($_GET['deluser'] != '1') {

            $stmt = $db->prepare('DELETE FROM admins WHERE u_id = :memberID');
            $stmt->execute(array(':memberID' => $_GET['deluser']));

            header('Location: users.php?action=deleted');
            exit;
        }
    }
    ?>

    <div class="dashboard">
        <div>
            <?php
            //show message from add / edit page
            if (isset($_GET['action'])) {
                echo '<h3>User ' . $_GET['action'] . '.</h3>';
            }
            ?>
            <div class="table_cont">
                <table>
                    <tr class="header" style="color:#fff;">
                        <th>Username</th>
                        <th>Fist Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    try {

                        $stmt = $db->query('SELECT u_id, username, email, first_name, last_name, role FROM admins ORDER BY username');
                        while ($row = $stmt->fetch()) {

                            echo '<tr>';
                            echo '<td>' . $row['username'] . '</td>';
                            echo '<td>' . $row['first_name'] . '</td>';
                            echo '<td>' . $row['last_name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['role'] . '</td>';
                            ?>

                    <td>
                        <!--  <a href="edit-user.php?memberID=<?php echo $row['u_id']; ?>" class="edit">Edit</a>-->
                        <?php if ($row['u_id'] != 1) { ?>
                        <a href="javascript:deluser('<?php echo $row['u_id']; ?>','<?php echo $row['username']; ?>')"
                            class="delete">Delete</a>
                        <?php } ?>
                    </td>

                    <?php
                            echo '</tr>';
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    ?>
                </table>
            </div>
            <a href='add-user.php' class="btn_c" style="margin-bottom:5px;">Add Admin</a>
            <!-- <div class="buttons">
                <?php //include('buttons.php') 
                ?>
            </div>-->
        </div>

</body>

</html>