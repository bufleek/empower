<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../static/css/admin_styling.css">
    <link rel="icon" href="../imgs/logo.jpg">
    <title>Dashboard | EPOK Admin</title>
</head>

<body>
    <link rel="stylesheet" href="../static/css/tables.css">
    <?php
    define('config_include', TRUE);
    include('../incs/nav.php');
    include('../incs/head.php');
    //include config
    require_once('../includes/config.php');
    ?>

    <div class="dashboard">
        <div class="head_cont">
            <h2>DASHBOARD</h2>
        </div>
        <div class="section_cont">
            <div class="section">
                <a onclick="location.href='users.php'">
                    <h3>My Admins</h3>
                </a>
            </div>
            <div class="section">
                <a onclick="location.href='posts.php'">
                    <h3>Posts</h3>
                </a>
            </div>
            <div class="section">
                <a onclick="location.href='downloads.php'">
                    <h3>Downloads</h3>
                </a>
            </div>
            <div class="section">
                <a onclick="location.href='messages.php'">
                    <h3>Messages from site</h3>
                </a>
            </div>
            <div class="dashboard_logout">
                <a onclick="location.href='logout.php'">
                    <h3>Logout</h3>
                </a>
            </div>
        </div>
    </div>
</body>

</html>