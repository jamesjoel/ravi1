<?php
include("config.php");
include("header.php");
// Backdoor protaction code ---- start
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// Backdoor protaction code ---- end
$id = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

?>
<div style="min-height: 600px;">
	<div class="container-fluid bg-info" style="min-height: 600px;">
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<p class="text-center text-ligh mt-4">
					Edit Your Profile
				</p>
			<form action="update.php" method="post">
				<table class="table table-dark table-bordered table-hover">
					<!-- show info from data array  -->
					<tr>
						<td>Full Name</td>
						<td><input name="full_name" value="<?php echo $data['full_name'];?>" type="text" class="form-control" /></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input disabled="disabled" type="text" class="form-control" value="<?php echo $data['username'];?>"></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input name="contact" type="text" class="form-control" value="<?php echo $data['contact'];?>"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>Male <input <?php if($data['gender']=='male'){ echo "checked='checked'"; } ?> type="radio" name="gender" value="male" />
							Female <input <?php if($data['gender']=='female'){ echo "checked='checked'"; } ?> type="radio" name="gender" value="female" />
						</td>
					</tr>
					<tr>
						<td>City</td>
						<td><select name="city" class="form-control">
										<option>Select</option>
										<option <?php if($data['city']=='Indore'){ echo "selected='selected'"; } ?>>Indore</option>
										<option <?php if($data['city']=='Mumbai'){ echo "selected='selected'"; } ?>>Mumbai</option>
										<option <?php if($data['city']=='Pune'){ echo "selected='selected'"; } ?>>Pune</option>
										<option <?php if($data['city']=='Delhi'){ echo "selected='selected'"; } ?>>Delhi</option>
									</select></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea name="add" class="form-control"><?php echo $data['address'];?></textarea></td>
					</tr>
				</table>
				<Br />
				<input type="submit" value="Update" class="btn btn-primary">
				
			</div>
		</form>
		</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>