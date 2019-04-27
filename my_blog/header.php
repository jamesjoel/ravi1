<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">My Blog</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	      <?php
	      if(isset($_SESSION['is_user_logged_in']))
	      { ?>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="my_account.php">My Account</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="add_blog.php">Add Blog</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="logout.php">Logout</a>
	      	</li>
	      <?php
	  		}else{ ?>

	      <li class="nav-item">
	        <a class="nav-link" href="login.php">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="signup.php">Singup</a>
	      </li> 
	  		<?php
	  		}
	      ?>
	    </ul>
	  </div> 
	</nav>
<div class="jumbotron">
	<h1>My Blog</h1>
</div>