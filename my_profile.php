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
					Welcome to our website <b><?php echo $_SESSION['name']; ?></b>
				</p>
				<table class="table table-dark table-bordered table-hover">
					<!-- show info from data array  -->
					<tr>
						<td>Full Name</td>
						<td><?php echo $data['full_name'];?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><?php echo $data['username'];?></td>
					</tr>
					<tr>
						<td>Profile</td>
						<td><img src="upload/<?php echo $data['image'] ?>" height="100" width="100"></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><?php echo $data['contact'];?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $data['gender'];?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><?php echo $data['city'];?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data['address'];?></td>
					</tr>
				</table>
				<Br />
				<a href="edit_profile.php" class="btn btn-dark">Edit</a>
				
			</div>
		</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>