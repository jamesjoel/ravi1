<?php
include("../config.php");

$a = $_GET['uid'];
$query = "DELETE FROM user WHERE id = $a";
mysqli_query($con, $query);
header("location:view_users.php");



?>