<?php 
include 'config/koneksi.php';

$biodata = mysqli_query ($conn,'SELECT `id_biodata`, `nama`, `tanggal_lahir`, `kota`, `panggilan`, `alamat`, `email`, `no_telp`, `resume`, `foto` FROM `biodata` WHERE 1');

while ($row = mysqli_fetch_array($biodata,MYSQLI_ASSOC)) {
 $nama = $row['nama'];
 $panggilan = $row['panggilan'];
 $alamat = $row['alamat'];
 $email = $row['email'];
 $no_telp = $row['no_telp'];
 $resume = $row['resume'];
 $tanggal_lahir = $row['tanggal_lahir'];
 $kota = $row['kota'];
 $foto  = $row['foto'];
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CV Hakimmil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->


<!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ca367db1de11b6e3b067678/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
<!--End of Tawk.to Script-->
</head>

<body id="page-top">

<!--/ Intro Nav /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">MyProfile</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--/ End Nav /-->


<!--/ Intro Jumbotron /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/test.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Halo, Saya <?= $panggilan; ?></h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Web Designer,Frontend Developer,Backend Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
<!--/ End Jumbotron /-->


<!-- Intro Resume -->
 <section id="resume" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/<?= $foto; ?>" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nama: </span> <span> <?= $nama;  ?></span></p>
                      <p><span class="title-s">Tanggal Lahir: </span> <span><?= $kota;  ?>,<?= $tanggal_lahir;  ?></span></p>
                      <p><span class="title-s">Alamat: </span> <span> <?= $alamat;  ?></span></p>
                      <p><span class="title-s">Email: </span> <span> <?= $email;  ?></span></p>
                      <p><span class="title-s">No. Hp: </span> <span><?= $no_telp;  ?></span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Kemampuan</p>
                  <?php 
                    $kemampuan = mysqli_query ($conn, 'SELECT `id_kemampuan`, `nama`, `persentasi` FROM `kemampuan` ORDER BY id_kemampuan ASC');

                      while ($row = mysqli_fetch_array($kemampuan,MYSQLI_ASSOC)) {
                      $nama = $row['nama'];
                      $persentasi = $row['persentasi'];

                      ?>
                      <span><?= $nama;  ?></span> <span class="pull-right"><?= $persentasi;  ?>%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $persentasi;  ?>%;" aria-valuenow="<?= $persentasi;  ?>" aria-valuemin="0"
                        aria-valuemax="100"></div>
                      </div>
                      <?php

                      }  

                   ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Resume
                    </h5>
                  </div>
                  <p class="lead">
                   <?= $resume;  ?>
                  </p>
                </div>
              </div>
            </div>
            <br>
            <br>
            <div class="row">
            	<div class="col-md-6">
            		<p class="title-s">Pendidikan</p>
                <ul>
                  <?php 
                     $pendidikan = mysqli_query ($conn, 'SELECT `id_pendidikan`, `nama_instansi`, `tahun_masuk`, `tahun_lulus`, `prodi` FROM `pendidikan` ORDER BY id_pendidikan ASC');

                      while ($row = mysqli_fetch_array($pendidikan,MYSQLI_ASSOC)) {
                      $nama = $row['nama_instansi'];
                      $tahun_masuk = $row['tahun_masuk'];
                      $tahun_lulus = $row['tahun_lulus'];
                      $prodi = $row['prodi'];
                   ?>
                  <li><?= $nama;  ?><br><?= $tahun_masuk  ?>-<?= $tahun_lulus  ?></li>
                  <p><?= $prodi;  ?></p>
                <?php } ?>
                </ul>
            	</div>
            	<div class="col-md-6">
            		<p class="title-s">Pengalaman</p>
                <ul>
                     <?php 
                     $pengalaman = mysqli_query ($conn, 'SELECT `id_pengalaman`, `nama`, `tahun_masuk`, `tahun_selesai`, `tempat`, `keterangan` FROM `pengalaman` ORDER BY id_pengalaman ASC');

                      while ($row = mysqli_fetch_array($pengalaman,MYSQLI_ASSOC)) {
                      $nama = $row['nama'];
                      $tahun_masuk = $row['tahun_masuk'];
                      $tahun_lulus = $row['tahun_selesai'];
                      $tempat = $row['tempat'];
                      $keterangan = $row['keterangan'];
                   ?>
                  <li><?= $nama;  ?><br><?= $tahun_masuk  ?>-<?= $tahun_lulus  ?></li>
                  <p><?= $tempat;  ?></p>
                <?php } ?>
                </ul>
            	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End Resume -->


<!-- Intro Portofolio -->
 <section id="portofolio" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portofolio
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php 
          $portofolio = mysqli_query ($conn, 'SELECT `id_portofolio`, `nama`, `keterangan`, `waktu`, `foto` FROM `portofolio` ORDER BY id_portofolio ASC');

          while ($row = mysqli_fetch_array($portofolio,MYSQLI_ASSOC)) {
          $nama = $row['nama'];
          $keterangan = $row['keterangan'];
          $waktu = $row['waktu'];
          $foto = $row['foto'];
      ?>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-1.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src=<?= $foto;  ?> alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?= $nama; ?></h2>
                    <div class="w-more">
                      <p><?= $keterangan;  ?> / <span class="w-date"><?= $waktu;  ?></span></p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </section>
<!-- End Portofolio -->



<!-- Intro Services -->
<section id="services" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php 
          $services = mysqli_query ($conn, 'SELECT `id_services`, `nama`, `keterangan`, `icon` FROM `services` ORDER BY id_services ASC');

          while ($row = mysqli_fetch_array($services,MYSQLI_ASSOC)) {
          $nama = $row['nama'];
          $keterangan = $row['keterangan'];
          $icon = $row['icon'];
      ?>
        <div class="col-md-6">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class=<?= $icon;  ?>></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?= $nama;  ?></h2>
              <p class="s-description text-center">
               <?= $keterangan;  ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </section>
<!-- End Services -->



<!-- Intro Contact -->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/bg.jpg)">
    <div class="overlay-mf" style="background-color: #8d8d8deb;"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div>
                      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdLVVyAOuHo4JEKoLP9Sa3aF1fCGOpD35wsxbvIPnANPLXRaQ/viewform?embedded=true" width="500" height="1200" frameborder="0" marginheight="0" marginwidth="0">Memuat...</iframe>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Komunikasi Lebih Lanjut
                    </h5>
                  </div>
                  <div class="more-info">
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> <?= $alamat; ?></li>
                      <li><span class="ion-ios-telephone"></span> <?= $no_telp; ?></li>
                      <li><span class="ion-email"></span> <?= $email; ?></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                    <?php 
                      $sosmed = mysqli_query ($conn, 'SELECT `id_sosmed`, `nama`, `link`, `icon` FROM `sosmed` ORDER BY id_sosmed ASC');

                      while ($row = mysqli_fetch_array($sosmed,MYSQLI_ASSOC)) {
                      $nama = $row['nama'];
                      $link = $row['link'];
                      $icon = $row['icon'];
                    ?>
                      <li><a href=<?= $link; ?>><span class="ico-circle"><i class=<?= $icon;  ?>></i></span></a></li>
                  <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End Contact -->


<!-- Intro Footer -->
 <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>2019</strong>.</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">Hakimmil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
<!-- End Footer -->



<!-- Intro Icon Up -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div> 
<!-- End Icon -->



 <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>