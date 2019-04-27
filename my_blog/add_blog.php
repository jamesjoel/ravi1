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
			<form action="save_blog.php" method="post" enctype="multipart/form-data">
							
				<div class="card">
				<div class="card-header">
					<h3>Add New Blog</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Title</label>
						<input type="Text" name="title" class="form-control">

					</div>
					<div class="form-group">
						<label>Blog Type</label>
						<select name="type" class="form-control">
							<option>Select</option>
							<option>Food</option>
							<option>Traval</option>
							<option>IT</option>
							<option>Software</option>
							<option>Money</option>
						</select>
					</div>
					<div class="form-group">
						<label>Blog Image</label>
						<input type="file" name="image" class="form-control">

					</div>
					<div class="form-group">
						<label>Detail</label>
						<textarea name="detail" class="form-control"></textarea>
						
					</div>
					
				</div>
				<div class="card-footer">
					<input type="submit" value="Submit" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>