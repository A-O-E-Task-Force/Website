<?php
    $maintenace =  0;

    if($maintenace == 1){
        echo "Maintenace under way!"
    }else{
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Data Home</title>
        <link rel="stylesheet" href="main.css">
        <script src="database.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li id="nav">
                    <a href="Database/ranks.php">Ranks</a>
                    <a href="Database/schedule.php">Schedule</a>
                    <a href="Database/squads.php">Squads</a>
                    <a href="index.php">Logout</a>
                </li>
            </ul>
        </nav>

        <h1 id="Header">Welcome to the Dark side of A.O.E</h1>

    </body>
</html>

<?php
    }
?>
