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



$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$arr = explode(".", $name);
$ext = end($arr);

if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png")
{
	if($size <= (1024*1024*1))
	{
		$new_name = rand(100000, 1000000).".".$ext;
		move_uploaded_file($tmp_name, "upload/".$new_name);
		$query = "INSERT INTO user (username, address, gender, full_name, password, city, contact, image) VALUES ('$b', '$d', '$e', '$a', '$c', '$g', '$f', '$new_name')";
		mysqli_query($con, $query);
		header("location:login.php");
	}
	else
	{
		$_SESSION['msg']="The File is Too Large !";
		header("location:signup.php");		
	}




	//--- 4. fire mysql query
	
}
else
{

	$_SESSION['msg']="The File Type Not Allowed !";
	header("location:signup.php");
}	





//--- 3. preparing mysql query


// ---- 5. Redirect to login page


?>