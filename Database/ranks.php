<?php
    $maintenace = 0;

    if($maintenace == 1){
        echo "Maintenace under way!";
    }else{
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Ranks</title>
        <link rel="stylesheet" href="../main.css">
        <script src="database.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li id="nav">
                    <a href="../database.php">Database Home</a>
                    <a href="schedule.php">Schedule</a>
                    <a href="squads.php">Squads</a>
                    <a href="" onclick="logout()">Logout</a>
                </li>
            </ul>
        </nav>

        <h1 id="Header">Rank Requirements</h1>
        <br>
        <br>
        <h2 align="center">Private First Class</h2>

        <ui id="Body2">
            <li>Must participate in 5 won alliance games!</li>
            <li>Compelete A.O.E Basic Training</li>
        </ui>

        <br>
        <br>
        <h2 align="center">Lance Corporal</h2>

        <ui id="Body2">
            <li>Must participate in 15 won alliance games!</li>
            <li>Must be rank "Private First Class"</li>
        </ui>

        <br>
        <br>
        <h2 align="center">Corporal</h2>

        <ui id="Body2">
            <li>Must participate in 25 won alliance games!</li>
            <li>Must be rank "Lance Corporal"</li>
        </ui>

        <br>
        <br>
        <h2 align="center">Sergeant</h2>

        <ui id="Body2">
            <li>Must participate in 50 won alliance games!</li>
            <li>Complete A.O.E Strategies Training</li>
            <li>Complete A.O.E Command Training</li>
            <li>Proof of Understanding the game (This must be from someone rank "Master Sergeant"
                or better)</li>
            <li>Must be rank "Corporal"</li>
        </ui>

        <br>
        <br>
        <h2 align="center">Staff Sergeant</h2>

        <ui id="Body2">
            <li>Must participate in 75 won alliance games!</li>
            <li>Proof of understanding A.O.E Strategies</li>
            <li>Proof of efficiently commanding 15 won alliance games (3 members or more surviving)</li>
            <li>Must be rank "Sergeant"</li>
        </ui>

        <br>
        <br>
        <h2 align="center">Master Sergeant</h2>

        <ui id="Body2">
            <li>Must participate in 125 won alliance games!</li>
            <li>Hold 5 A.O.E Trainings</li>
            <li>Active / In alliance for 6 months</li>
            <li>Proof of efficiently commanding 50 won alliance games (3 members or more surviving)</li>
            <li>Must be rank "Staff Sergeant"</li>
        </ui>

        <br>
        <br>
        <h2 align="center">Sergeant Major</h2>
        <ui id="Body2">
            <li>Must participate in 1000 won alliance games!</li>
            <li>Hold 50 A.O.E Trainings</li>
            <li>Active / In alliance for 8 months</li>
            <li>Proof of efficiently commanding 300 won alliance games (3 members or more surviving)</li>
            <li>Must be rank "Staff Sergeant"</li>
        </ui>


    </body>
</html>

<?php
    }
?>
