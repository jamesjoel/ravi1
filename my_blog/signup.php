<?php
include("header.php")
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
			<form action="save.php" method="post">
				
			<div class="card">
				<div class="card-header">
					<h3>Register</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="Text" name="full_name" class="form-control">

					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="Text" name="username" class="form-control">

					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
						
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input type="password" class="form-control">
						
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Register" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>