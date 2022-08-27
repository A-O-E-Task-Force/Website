<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Squads</title>
        <link rel="stylesheet" href="../main.css">
        <script src="database.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li id="nav">
                    <a href="../database.php">Database Home</a>
                    <a href="ranks.php">Ranks</a>
                    <a href="schedule.php">Schedule</a>
                    <a href="" onclick="logout()">Logout</a>
                </li>
            </ul>
        </nav>

        <h1 id="Header">A.O.E Squads List</h1>
        <br>
        <br>

        <h2 align="center">US Squads</h2>
        <br>
        <ui>
            <li id="squads-list">
                <a href="Squads/wolverines.php">Wolverines</a>
            </li>
        </ui>

        <br>
        <br>
        <h2 align="center">Europe Squads(Non-English)</h2>
        <br>
        <ui>
            <li id="squads-list">
                <a href="Squads/vikingraiders.php">Viking Raiders</a>
            </li>
        </ui>

        <br>
        <br>
        <h2 align="center">Asia Squads(Non-English)</h2>
        <br>
        <ui>
            <li id="squads-list">
                <a href="Squads/yellowjackets.php">Yellow Jackets</a>
            </li>
        </ui>
    </body>
</html>

<?php
    }
?>