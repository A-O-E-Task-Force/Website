<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Wolverines Home</title>
        <link rel="stylesheet" href="../../main.css">
        <script src="database.js"></script>
    </head>
    <body>

        <h1 id="Header">Wolverines</h1>
        
        <br>
        <br>
        <h2 id="Header">About the Wolverines</h2>
        <p id="Body1">
            The wolverines was inspired off of the movie "Red Dawn (1984) / Red Dawn (2012)". The 
            wolverines are the first operational group of the A.O.E Task Force with the Leader 
            BigTallahasee being the first member! The group was formed 08/25/2022 as a US Squadron
            for all *Fluent* English Speakers to get together.
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
                <td>BigTallahasee</td>
                <td>Sergeant Major of the A.O.E Task Force</td>
                <td>False</td>
                <td>08/25/2022</td>
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