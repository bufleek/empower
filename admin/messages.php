<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../static/css/admin_styling.css">
    <title>Document</title>
</head>

<body>
    <?php
    define('config_include', TRUE);
    include '../incs/nav.php';
    include '../incs/head.php';
    include_once '../includes/config.php';
    ?>

    <div class="table_cont dashboard">
        <table>
            <tr class="header" style="color:#fff;">
                <th>Message ID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Email</th>

            </tr>
            <?php
            try {

                $stmt = $db->query('SELECT message_id, name, email, subject, message FROM messages');
                while ($row = $stmt->fetch()) {

                    echo '<tr>';
                    echo '<td>' . $row['message_id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['subject'] . '</td>';
                    echo '<td>' . $row['message'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    ?>



            <?php
                    echo '</tr>';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            ?>
        </table>
    </div>
</body>

</html>