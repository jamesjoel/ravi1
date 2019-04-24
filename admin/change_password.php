<?php
include("../config.php");
include("header.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
  header("location:index.php");
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Change Password</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
        </div>
        
      </div>
      <div class="row">
        <form action="update_pass.php" method="post">
          
          <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
            <label>Current Password</label>
            <input type="password" class="form-control" name="pass">
          </div>
          <div class="form-group">
            <label>New Password</label>
            <input type="password" class="form-control" name="n_pass">
          </div>
          <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" class="form-control" name="cn_pass">
          </div>
          <input type="submit" value="Update" class="btn btn-primary">
          <p class="text-center text-danger">
            <?php
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
    </section>
  </div>
<?php
include("footer.php");
?>
