<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>A.O.E Members</title>
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

        <h1 id="Header">A.O.E Members List</h1>
        <br>
        <br>
        <p id="Body1">
            This is where you can find out the A.O.E Hierarchy
            structure, members within the alliance, and other 
            stats about members of A.O.E
            <br>
            We do ask that when you are considering a picture to
            use for your member slot, make sure that all pictures
            are appropriate. Nothing with nudity, refrences to alcohol
            or drugs, etc. Anything that contains this type of material
            will automatically be denied!
        </p>
        <br>
        <br>
        <h1 id="Header">A.O.E Hierarchy</h1>
        <br>
        <br>


        <br>
        <h1 id="Header">Member's Hall</h1>
        <br>
        <br>
        <p id="Body1">
            Images for members will go here!
        </p>

        <br>

    </body>
</html>

<?php
    }
?>