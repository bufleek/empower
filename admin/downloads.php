<?php include('db.php') ?>
<link rel="stylesheet" type="text/css" href="../static/css/admin_styling.css">
<link rel="stylesheet" type="text/css" href="css/tables.css">
<?php
include 'filesLogic.php';
define('config_include', TRUE);
include '../incs/nav.php';
include '../incs/head.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Panel | Downloadable Files</title>
    <style>
    .buttonss {
        display: inline-block;
        margin: 10px;
        text-decoration: none;
        color: #444;
        padding: 10px 25px;
        border: none;
        background-color: #0E7D92;
        color: white;
    }

    .btnss {
        display: inline-block;
        text-decoration: none;
        color: #444;
        padding: 8px 25px;
        border: none;
        background-color: #0E7D92;
        color: white;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="table_cont" style="max-width:calc(95% - 40px); overflow-X:scroll; margin:auto;">
            <table id="myTable">
                <thead>
                    <th>Filename</th>
                    <th>size</th>
                    <th>Tag</th>
                    <th>Term</th>
                    <th>Download</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php foreach ($files as $file) : ?>
                    <tr>
                        <td><?php echo $file['name']; ?></td>
                        <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                        <td><?php echo $file['tag']; ?></td>
                        <td><?php echo $file['term']; ?></td>
                        <td><a href="uploads/<?php echo $file['name']; ?>" class="btnss" download>Download</a>
                        </td>
                        <td>
                            <!--&times;<a href="deletefile.php?id=<? php // echo $file["id"]; 
                                                                        ?>" class="delete">Delete</a>-->
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <div class="buttonss">
                <a href="files.php">
                    <font size="5">+</font>Add Downloadable File
                </a>
            </div>
        </div>

</body>

</html>