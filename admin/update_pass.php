<?php
include("../config.php");
// print_r($_POST);
$a = $_POST['pass'];
$b = $_POST['n_pass'];
$c = $_POST['cn_pass'];


$id = $_SESSION['id'];

$query = "SELECT * FROM admin WHERE id=$id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

if($data['password']==sha1($a))
{
	if($b == $c)
	{
		$b = sha1($b);
		$query = "UPDATE admin SET password ='$b' WHERE id=$id";
		mysqli_query($con, $query);
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg']="Password and Confirm Password is not Matched";
		header("location:change_password.php");		
	}
}
else
{
	$_SESSION['msg']="Current Password is not Matched";
	header("location:change_password.php");
}

?>