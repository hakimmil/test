<?php 

include 'header.php';
include '../config/koneksi.php';

session_start();
if (empty($_SESSION['username'])) {
	session_destroy();
	header('Location: masuk');
	exit;
} else {
	$nama = $_SESSION['username'];
	$admin = mysqli_query($conn,"SELECT  `nama` FROM `login` WHERE `username` = '$nama'");
	$row = mysqli_fetch_array($admin);
	$nama = $row['nama'];
}
?>
<body class="hold-transition skin-blue sidebar-mini">


<!-- Start Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

     <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
  	</nav>
  </header>
<!-- End Header -->
 

 <aside class="main-sidebar">
 	<section class="sidebar">
 		<?php include 'kiri.php'; ?>
 	</section>
 </aside>

<div class="content-wrapper">
    <section class="content-header">
    	<?php include 'kanan.php'; ?>
    </section>
</div>

<?php
	include 'footer.php';
?>