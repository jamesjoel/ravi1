<?php
include("config.php");
// print_r($_POST);
$a = $_POST['full_name'];
$b = $_POST['contact'];
$c = $_POST['city'];
$d = $_POST['add'];
$e = $_POST['gender'];

$id = $_SESSION['id'];

$query = "UPDATE user SET full_name='$a', contact = '$b', city = '$c', address = '$d', gender = '$e' WHERE id = $id";
mysqli_query($con, $query);
header("location:my_profile.php");




?>