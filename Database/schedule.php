<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Schedule</title>
        <link rel="stylesheet" href="../main.css">
        <script src="database.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li id="nav">
                    <a href="../database.php">Database Home</a>
                    <a href="ranks.php">Ranks</a>
                    <a href="squads.php">Squads</a>
                    <a href="" onclick="logout()">Logout</a>
                </li>
            </ul>
        </nav>

        <h1 id="Header">Coming Soon!</h1>

    </body>
</html>

<?php
    }
?>