<?php
include("../config.php");
include("header.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
  header("location:index.php");
}
$query ="SELECT * FROM user";
$result=mysqli_query($con, $query);


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View All Users
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Users</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
        </div>
        
      </div>
      <div class="row">
        <section class="col-lg-5 connectedSortable">
          <table class="table table-borderd table-hover table-info">
            <tr>
              <th>S.No.</th>
              <th>Full Name</th>
              <th>Username/Email</th>
              <th>Contact</th>
              <th>View Detail</th>
              <th>Status</th>
            </tr>
            <?php
            while($data=mysqli_fetch_assoc($result))
            { ?>
              <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['full_name'];?></td>
                <Td><?php echo $data['username'];?></Td>
                <td><?php echo $data['contact'];?></td>
                <td><a href="detail.php" class="btn btn-info">View</a></td>
                <td><a href="#" class="btn btn-warning">Active</a></td>
              </tr>
            <?php
            }
            ?>



          </table>
        </section>
      </div>
    </section>
  </div>
<?php
include("footer.php");
?>
