<?php
include("config.php");
include("header.php");
?>
<div style="min-height: 600px;">
	<div class="container-fluid bg-info" style="min-height: 600px;">
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<p class="text-center text-ligh mt-4">
					for registered user login here...
				</p>
				<form action="auth.php" method="post">
					
				<div class="card mt-4">
					<div class="card-header">
						<h2>User Login</h2>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="pass" type="password" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Login" class="btn btn-success">
					</div>
				<p class="text-center text-danger">
				<?php
				// Flash message show here
				// the isset function check if variable created or not 
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
					
				}
				?>
				</p>
				</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>