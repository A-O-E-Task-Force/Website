<?php
  $maintenace = 0;

  if($maintenace == 1){
    echo "Maintenace under way!";
  }else{
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
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
    <h1 id="Header">Welcome to A.O.E Task Force</h1>
    <br>
    <br>
    <p id="Body1">
        This website is currently a work in progress and will be coming soon.
        <br>
        You may find more information on our <a href="https://discord.gg/sz8DGhuxtV">Discord!</a>
    </p>


  </body>
</html>
<?php
  }
?>
