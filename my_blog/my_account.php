<?php
include("config.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}


include("header.php");
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			  <a href="#" class="list-group-item">Food</a>
			  <a href="#" class="list-group-item">Travel</a>
			  <a href="#" class="list-group-item">IT</a>
			  <a href="#" class="list-group-item">Software</a>
			  <a href="#" class="list-group-item">Mony</a>
			</div>
		</div>
		<div class="col-md-9">
			<h3>Welcome : <?php echo $_SESSION['name']; ?></h3>		
		</div>
	</div>
</div>
</body>
</html>