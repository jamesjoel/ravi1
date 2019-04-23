<?php
include("../config.php");
$u = $_POST['username'];
$p = $_POST['password'];

$query = "SELECT * FROM admin WHERE username = '$u'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password']== sha1($p))
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['full_name'];
		$_SESSION['is_admin_logged_in']=true;
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg']="Password not Correct !";
		header("location:index.php");		
	}
}
else
{
	$_SESSION['msg']="Username And Password not Correct !";
	header("location:index.php");
}

?>