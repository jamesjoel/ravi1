<?php
include("header.php");
?>
<div style="min-height: 600px;">
	<div class="container-fluid bg-info" style="min-height: 600px;">
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
						<p class="text-center text-ligh mt-4">
							for new user login here...
						</p>
						<form action="save.php" method="post">
							
						<div class="card mt-4">
							<div class="card-header">
								<h2>User Registration</h2>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label>Full Name</label>
									<input name="full_name" type="text" class="form-control">
								</div>

								<div class="form-group">
									<label>Username</label>
									<input name="username" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control">
								</div>
								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" class="form-control" name="re_pass">
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" name="contact" class="form-control">
								</div>
								<div class="form-group">
									<label>Gender</label>
									Male <input value="male" type="radio" name="gender"/>
									Female <input value="female" type="radio" name="gender"/>
								</div>
								<div class="form-group">
									<label>City</label>
									<select name="city" class="form-control">
										<option>Select</option>
										<option>Indore</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Delhi</option>
										<option>Select</option>
									</select>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea name="add" class="form-control"></textarea>
								</div>
							</div>
							<div class="card-footer">
								<input type="submit" value="Signup" class="btn btn-success">
							</div>

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