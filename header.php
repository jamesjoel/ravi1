<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class="navbar bg-dark navbar-dark navbar-expand-sm">
	<a href="#" class="navbar-brand">Stepping Stone</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div id="myMenu" class="navbar-collapse collapse">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="index.php" class="nav-link">Home</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link">About</a>
		</li>
		<li class="nav-item">
			<a href="contact.php" class="nav-link">Contact</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link">About</a>
		</li>

		<?php
		// When user is logged in
		if(isset($_SESSION['is_user_logged_in']))
		{ ?>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout</a>
			</li>
			<li class="nav-item">
				<a href="my_account.php" class="nav-link">My Account</a>
			</li>
			<li class="nav-item">
				<a href="my_profile.php" class="nav-link">My Profile</a>
			</li>
		<?php
		} // when user is not logged in
		else
		{ ?>
			<li class="nav-item">
				<a href="login.php" class="nav-link">Login</a>
			</li>
			<li class="nav-item">
				<a href="signup.php" class="nav-link">Singup</a>
			</li>
		<?php
		}
		?>



		
	</ul>
	</div>
</nav>
<div class="jumbotron mb-0 bg-danger" style="background-image: url('image/bg-1.jpg'); background-size: 100% 100%; height: 250px">
	<h2>The Stepping Stone</h2>
	<p>Best Web Training Institute in Indore</p>
</div>