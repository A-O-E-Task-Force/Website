<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Viking Raiders Home</title>
        <link rel="stylesheet" href="../../main.css">
        <script src="database.js"></script>
    </head>
    <body>
        <h1 id="Header">Viking Raiders</h1>
        
        <br>
        <br>
        <h2 id="Header">About the Viking Raiders</h2>
        <p id="Body1">
            Description will go here!
        </p>
        
        <br>
        <br>
        
        <h2 id="Header">Current Games</h2>
        
        <ui>
            <li id="back">
                <a href="" onclick="">Add Game</a>
            </li>
        </ui>
        
        <table id="Wiki">
            <tr>
                <th>Game ID</th>
                <th>Status(Winning)</th>
                <th>Deployed Date</th>
                <th>Evac Date</th>
            </tr>
            <tr>
                <td><a href="">None</a></td>
                <td>
                    None
                </td>
                <td>None</td>
                <td>None</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <h2 id="Header">Roster</h2>
        
        <table id="Wiki">
            <tr>
                <th>Username</th>
                <th>Rank</th>
                <th>LoA</th>
                <th>Assign Date</th>
            </tr>
            <tr>
                <td>None</td>
                <td>None</td>
                <td>None</td>
                <td>None</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <nav>
            <ui align="right">
                <li id="back">
                    <a href="../squads.html">Back</a>
                </li>
            </ui>
        </nav>
    </body>
</html>

<?php
    }
?>