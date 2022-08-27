<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Wiki</title>
        <link rel="stylesheet" href="main.css">
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

        <h1 id="Header">A.O.E Wiki</h1>
        <br>
        <br>
        <table id="Wiki">
            <tr>
                <th>Entry</th>
                <th>Description</th>
                <th>Publish Date</th>
                <th>Editted</th>
            </tr>
            <tr>
                <td><a href="">A.O.E Founding</a></td>
                <td>
                    Learn about the foundings of A.O.E Task Force, When it was
                    <br>
                    started and more intresting facts about the A.O.E Task Force
                </td>
                <td>Not Published</td>
                <td>Not Updated</td>
            </tr>
            <tr>
                <td><a>None</a></td>
                <td>None</td>
                <td>Not Published</td>
                <td>Not Updated</td>
            </tr>
        </table>

    </body>
</html>

<?php
    }
?>