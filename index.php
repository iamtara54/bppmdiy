<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="shortcut icon" href="http://produksi.jmc.co.id/prototipe/2018/dataku_diy/static/images/logo-client.png">
	<title>BPPM Daerah Istimewa Yogyakarta</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
  <link type="text/css" rel="stylesheet" href="css/layout.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<!-- <header id="home"> -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#">Layanan</a></li>
					<li class="has-dropdown"><a href="#">Info Publik</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="blog-single.html">PPID</a>
                  <ul class="dropdown wow">
                    <li><a href="blog-single.html">Profil</a></li>
                    <li><a href="blog-single.html">Informasi Berkala</a></li>
                    <li><a href="blog-single.html">Informasi Setiap Saat</a></li>
                    <li><a href="blog-single.html">Informasi Serta Merta</a></li>
                    <li><a href="blog-single.html">Permohonan Informasi</a></li>
                    <li><a href="blog-single.html">Pengajuan Keberatan</a></li>
                  </ul>
              </li>
              <li><a href="blog-single.html">Dokumen Perundang-undangan</a></li>
              <li class="has-dropdown"><a href="blog-single.html">Dokumen Perencanaan</a>
                  <ul class="dropdown">
                    <li><a href="blog-single.html">RPJMD</a></li>
                    <li><a href="blog-single.html">RKPD</a></li>
                    <li><a href="blog-single.html">Renstra</a></li>
                    <li><a href="blog-single.html">Renja</a></li>
                    <li><a href="blog-single.html">DPA</a></li>
                  </ul>
              </li>
              <li><a href="blog-single.html">Dokumen Kinerja</a></li>
              <li><a href="blog-single.html">Laporan Keuangan</a></li>
            </ul>
          </li>
					<li><a href="#">Satriya</a></li>
					<li><a href="#">Forum Anak</a></li>
					<li class="has-dropdown"><a href="#">Pengumuman</a>
            <ul class="dropdown">
              <li><a href="blog-single.html">Agenda</a></li>
              <li><a href="blog-single.html">Pengumuman</a></li>
              <li><a href="blog-single.html">Pelatihan</a></li>
            </ul>
          </li>
					<!-- <li><a href="#team"></a></li> -->
					<li class="has-dropdown"><a href="#">Media</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">Galeri</a></li>
              <li><a href="blog-single.html">Iklan Layanan</a></li>
              <li><a href="blog-single.html">Video</a></li>
              <li><a href="blog-single.html">Download</a></li>
						</ul>
					</li>
					<!-- <li><a href="#contact">Contact</a></li> -->
          <li><button class="main-btn">Login</button></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10">
						
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	<!-- </header> -->
	<!-- /Header -->

	<?php if(!isset($_GET['page'])) $_GET['page']=0;?>
    <?php
        if ($_GET['page']) {
            require_once 'pages/'.$_GET['page'] . '.php';
        } else {
            require_once 'pages/home.php';
        }
    ?>

    <!-- Contact -->
  <div id="contact" class="section md-padding bg-dark" style="padding-bottom: 150px;">

    <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">
        <div class="col-md-4 pro">
          <h2 style="font-size: 20px;">Kontak Kami</h2>
          <div class="space-bottom-xs" style="position: relative;z-index:10; margin-top: 23px;">
            <a href="https://www.google.com/search?safe=active&tbm=lcl&ei=gjScXIPhHMKzmgeDybZA&q=bappeda+diy&oq=bappeda+diy&gs_l=psy-ab.3..0l2j0i22i30k1l8.12726.13470.0.14358.4.4.0.0.0.0.149.418.3j1.4.0....0...1c.1.64.psy-ab..0.4.415...35i39k1j0i67k1.0.m00WGDTeVrk#rlfi=hd:;si:14992796967201650476;mv:!1m2!1d-7.794467551510857!2d110.36938212942187!2m2!1d-7.797539526918995!2d110.36430738996569!4m2!1d-7.796003542033724!2d110.36684475969378!5i18" id="clickformap"><img src="img/maps.png" alt=""></a>
          </div>
          <p>
            <i class="fa fa-building fa-fw"></i> Jl.Tentara Rakyat Mataram No.31 Yogyakarta Kota Yogyakarta DIY 55231 Indonesia<br>
            <i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:bappeda@jogjaprov.go.id " style="color: #ddd;"> bppm@jogjaprov.go.id</a><br>
            <i class="fa fa-phone fa-fw"></i> (0274) 562714<br>
            <i class="fa fa-fax fa-fw"></i> (0274) 558402<br>
            <i class="fa fa-globe fa-fw"></i> <a href="http://bappeda.jogjaprov.go.id" style="color: #ddd;"> http://www.bppm.jogjaprov.go.id</a><br>
          </p>
        </div>
        <div class="col-md-2 pro">
          <h2 style="font-size: 20px;">Tentang Kami</h2>
          <p style="font-size: 16px;">
            <a href="#" style="color: #ddd;"> Sejarah</a><br>
            <a href="#" style="color: #ddd;"> Visi Misi</a><br>
            <a href="#" style="color: #ddd;"> Stuktur Organisasi</a><br>
            <a href="#" style="color: #ddd;"> Tugas Dan Fungsi</a>
            <a href="#" style="color: #ddd;"> Profil Penjabar</a><br>
            <a href="#" style="color: #ddd;"> Profil Dinas</a>
          </p>
        </div>
        <div class="col-md-3 pro">
          <h2 style="font-size: 20px;">Link Terkait</h2>
          <p style="font-size: 16px;">
            <a href="#" style="color: #ddd;"> Pemda Provinsi DIY</a><br>
            <a href="#" style="color: #ddd;"> Kemenpppa</a><br>
            <a href="#" style="color: #ddd;"> Kementrian Dalam Negeri</a><br>
          </p>
        </div>
        <div class="col-md-3 pro">
          <h2 style="font-size: 20px;"> Kunjungan</h2>
          <ul class="sejajar">
            <li><p>Anda Pengunjung Ke</p></li>
            <li class="linkkanan"><a href="">2321</a></li>
          </ul>
          <ul class="sejajar">
            <li><p>Hari Ini</p></li>
            <li class="linkkanan"><a href="">23</a></li>
          </ul>
          <ul class="sejajar">
            <li><p>Bulan Ini</p></li>
            <li class="linkkanan"><a href="">221</a></li>
          </ul>
          <ul class="sejajar">
            <li><p>Total Kunjungan</p></li>
            <li class="linkkanan"><a href="">2321</a></li>
          </ul>
          <ul class="footer-follow">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </div>
  <!-- /Contact -->


	<!-- Footer -->
  <footer id="footer" class="xs-padding bg-red">

    <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">

        <div class="col-md-12">

          <!-- footer logo -->
          <!-- <div class="footer-logo">
            <a href="index.html"><img src="img/logo-alt.png" alt="logo"></a>
          </div> -->
          <!-- /footer logo -->

          <!-- footer follow -->
          <!-- <ul class="footer-follow">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul> -->
          <!-- /footer follow -->

          <!-- footer copyright -->
          <div class="footer-copyright">
            <p>COPYRIGHT © 2019 BAPPEDA DAERAH ISTIMEWA YOGYAKARTA. All Rights Reserved. <br> Powered by <a href="#" target="_blank">JMC IT Consultant</a></p>
          </div>
          <!-- /footer copyright -->

        </div>

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </footer>
  <!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>