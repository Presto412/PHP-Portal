<?php
include('session.php');
?>
<html>
    <head>
        <title>Welcome </title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    
    <body>
      <?php require 'partials/header.php' ?>
      <center>
          <div class="card">
            <img src="./assets/images/avatar_1.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b><?php echo $_SESSION["user_id"]; ?></b></h4> 
                <p>Web Developer</p> 
            </div>
          </div>
          <h2><a href = "logout.php">Sign Out</a></h2></center>
      </center>
   </body>
   
</html>
