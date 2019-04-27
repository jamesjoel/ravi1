<?php

include("config.php");
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
			<div class="card">
				<form action="auth.php" method="post">
					
				<div class="card-header">
					<h3>Login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="Text" name="username" class="form-control">

					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
						
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-primary">
				</div>
				</form>

				<p class="text-danger">
					<?php
					if(isset($_SESSION['msg']))
					{
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>
				</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>