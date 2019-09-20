<?php include 'filesLogic.php'; ?>
<?php
define('config_include', TRUE);
include '../incs/nav.php';
include '../incs/head.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../static/css/admin_styling.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Files Upload and Download</title>
    <style>
    form {
        padding-top: 50px;
    }

    button {
        padding: 10px 20px;
        float: left;
    }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="row">
            <form action="fileslogic.php" method="post" enctype="multipart/form-data">
                <h1 style="text-align:center; padding-bottom:3%; color:burlywood;"> Add A Download</h1>
                <h3>Upload File</h3>
                <input type="file" name="myfile"> <br>
                <input type="text" name="tag" placeholder="Add a Tag (ie..any description...)">
                <button type="submit" name="save">upload</button>
            </form>
        </div>
    </div>
</body>

</html>