<?php
include("config.php");
// print_r($_POST);
$id = $_SESSION['id'];
$a = $_POST['title'];
$b = $_POST['type'];
$c = $_POST['detail'];


$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$arr = explode(".", $name);
$ext = end($arr);

$new_name = rand(100000, 1000000).".".$ext;

$query = "INSERT INTO blog (user_id, title, type, image, detail) VALUES ($id, '$a', '$b', '$new_name', '$c')";

mysqli_query($con, $query);
move_uploaded_file($tmp_name, "blog_img/".$new_name);
header("location:my_account.php");

?>
