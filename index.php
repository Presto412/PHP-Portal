<?php
include('config.php');
session_start();

$user_check = $_SESSION['user_id'];

if (!isset($_SESSION['user_id'])) {
    header("location:signup.php");
} else {
    header("location:welcome.php");
}
?>
