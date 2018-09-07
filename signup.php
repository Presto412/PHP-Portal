<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);
    $sql = "INSERT INTO da1 VALUES(NULL, '$myusername', '$mypassword');";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $_SESSION["user_id"] = $myusername;
        header("location: welcome.php");
    } else {
        $error = "Account already exists, try a different username";
    }
}
?>
<html>
   
   <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
   </head>
   
   <body>

    <?php require 'partials/header.php' ?>

    <?php if (!empty($error)) : ?>
      <p> <?= $error ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="" method="POST">
      <input name="username" type="text" placeholder="Enter your Username">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>



