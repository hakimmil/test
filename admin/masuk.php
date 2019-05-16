<?php 

include '../config/koneksi.php';
include 'header.php';

session_start();
if (!empty($_SESSION['username'])) {
	header('Location: admin');
}
?>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

 <?php

 	if (isset($_POST['submit'])) {
 		$username = $_POST['username'];
 		$password = MD5($_POST['password']);
 		$login = mysqli_query($conn,"SELECT `id`, `nama`, `username`, `password` FROM `login` WHERE username = '$username' AND password = '$password' ");

 		$row = mysqli_fetch_array($login);

 		if ($row['username'] == $username AND $row['password'] == $password) {
 			$_SESSION['username'] = $row['username'];
 			$_SESSION['id'] = $row['id'];

 			header('Location: admin');
 		} else {
 			session_destroy();
 			header('Location: masuk');
 		}
 	}

	include 'footer.php';

  ?>