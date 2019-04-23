<?php
include("config.php");
include("header.php");
// Backdoor protaction code ---- start
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// Backdoor protaction code ---- end



?>
<div style="min-height: 600px;">
	<div class="container-fluid bg-info" style="min-height: 600px;">
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<p class="text-center text-ligh mt-4">
					Welcome to our website <b><?php echo $_SESSION['name']; ?></b>
				</p>
				
			</div>
		</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>