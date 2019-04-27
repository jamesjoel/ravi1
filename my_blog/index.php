<?php
include("config.php");
include("header.php");

$query = "SELECT * FROM blog";
$result = mysqli_query($con, $query);


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
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ 
				$x = $data['user_id'];
				$query2 = "SELECT * FROM user WHERE id = $x";
				$result2= mysqli_query($con, $query2);
				$data2 = mysqli_fetch_assoc($result2);



				?>
			<div class="row mt-4">
				<div class="col-md-10 offset-md-1">
					<div class="card">
					  <img class="card-img-top" height="100" src="blog_img/<?php echo $data['image']; ?>" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title mb-0"><?php echo $data['title']; ?><small> (<?php echo $data['type']; ?>)</small></h4>
					    <strong class="text-danger">[<?php echo $data2['full_name']; ?>]</strong>
					    <p class="card-text"><?php echo substr($data['detail'], 0, 100);?>...</p>
					    <a href="#" class="btn btn-primary">Read More</a>
					  </div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			
		</div>
	</div>
</div>
</body>
</html>