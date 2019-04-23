<?php
include("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-lg"><b>The Stepping Stone</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <div style="min-height: 500px;">
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3>Admin Login</h3>              
            </div>
            <div class="panel-body">
              <form action="auth.php" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="panel-footer">
              <input type="submit" value="Login" class="btn btn-primary">
            </div>
              </form>
              <p class="text-danger text-center">
                <?php
                if(isset($_SESSION['msg']))
                {
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
                ?>
              </p>
          </div>
        </div>
      </div>
    </div>
 </div>
  
<script src="js/jquery.min.js"></script>
<script src=js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>