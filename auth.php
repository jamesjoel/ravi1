<?php
// print_r($_POST);

include("config.php");

$u = $_POST['username'];
$p = $_POST['pass'];
$query = "SELECT * FROM user WHERE username = '$u'";

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	// right now $result is a object we have to convert into an asso. array
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	if($data['password']==sha1($p))
	{
		if($data['status']==1)
		{

		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;

		
		header("location:my_account.php");
		}
		else
		{
			$_SESSION['msg']="You Are Deactive Now pls contact our team.... !";
			header('location:login.php');
		}
	}
	else
	{
		$_SESSION['msg']="Invalid Password";
		header('location:login.php');
	}
}
else
{
	$_SESSION['msg']="Invalid Username and Password";
	header('location:login.php');

}
?>