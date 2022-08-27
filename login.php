<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>

<html lang="en" and dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Login/Register</title>
        <link rel="stylesheet" href="main.css">
        <script src="login.js"></script>
        <script src="database.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li id="nav">
                    <a href="index.php">Homepage</a>
                    <a href="wiki.php">Wiki</a>
                    <a id="TopSecret" href="database.php" onclick="openDatabase()">Database</a>
                    <a href="members.php">Members</a>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </nav>
        <form id="Login" class="box" action="login.html" method="post">
            <h1>
                Login
            </h1>
            <input type="text" name="" placeholder="Enter username" id="username">
            <br>
            <br>
            <input type="password" name="" placeholder="Enter password" id="password">
            <br>
            <br>
            <input type="submit" id="login" value="Login" onclick="validate()">

        </form>
    </body>

</html>

<?php
    }

?>
