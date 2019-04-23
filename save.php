<?php
// print_r($_POST);
//---- 1. Creating Connection to Database
include("config.php");
// $con = mysqli_connect(hostname, username, password, dbname)



//----- 2. Getting data from $_POST array
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];

// sha1() function convert password to a incrupted string
$c = sha1($c);


$d = $_POST['add'];
$e = $_POST['gender'];
$f = $_POST['contact'];
$g = $_POST['city'];


//--- 3. preparing mysql query

$query = "INSERT INTO user (username, address, gender, full_name, password, city, contact) VALUES ('$b', '$d', '$e', '$a', '$c', '$g', '$f')";

//--- 4. fire mysql query
mysqli_query($con, $query);

// ---- 5. Redirect to login page
header("location:login.php");


?>