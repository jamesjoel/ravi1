<?php
include("config.php");
// print_r($_POST);
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];

$c = sha1($c);

$query = "INSERT INTO user (full_name, username, password) VALUES ('$a', '$b', '$c')";
mysqli_query($con, $query);
header("location:login.php");
?>