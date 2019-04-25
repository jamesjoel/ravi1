<?php
include("../config.php");
include("header.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
  header("location:index.php");
}
$a = $_GET['uid'];


$query ="SELECT * FROM user WHERE id = $a";
$result=mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users Detail
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
        </div>
        
      </div>
      <div class="row">
        <section class="col-md-4 col-md-offset-4 connectedSortable">
          <table class="table table-borderd table-hover table-info">
            <tr>
              <td>Full Name</td>
              <td><?php echo $data['full_name']; ?></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><?php echo $data['username']; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><?php echo $data['address']; ?></td>
            </tr>
            <tr>
              <td>City</td>
              <td><?php echo $data['city']; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $data['gender']; ?></td>
            </tr>
            <tr>
              <td>Contact</td>
              <td><?php echo $data['contact']; ?></td>
            </tr>

          </table>
        </section>
      </div>
    </section>
  </div>
<?php
include("footer.php");
?>
