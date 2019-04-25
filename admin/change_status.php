<?php
include("../config.php");

$a = $_GET['uid'];

$query = "UPDATE user SET status = !status WHERE id = $a";
mysqli_query($con, $query);
header("location:view_users.php");



?>