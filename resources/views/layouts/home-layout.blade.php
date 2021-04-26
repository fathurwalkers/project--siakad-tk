<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- Informasi Umum -->
		<title>@yield('title')</title>
		<meta name="description" content="Sistem Informasi Sekolah SMKN 1 Berau" />
		<meta name="author" content="Noviyanto Rachmady ['me@novay.web.id']" />
		
		<!-- Koleksi CSS -->
		<link href="{{ asset('vendor/websekolah/assets') }}/paket/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="{{ asset('vendor/websekolah/assets') }}/paket/css/sticky-footer.css" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('vendor/websekolah/assets') }}/paket/css/icons.css" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('vendor/websekolah/assets') }}/paket/css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('vendor/websekolah/assets') }}/paket/css/animate.css" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('vendor/websekolah/assets') }}/paket/css/onebyone.css" media="all" />
		<link href="{{ asset('vendor/websekolah/assets') }}/css/utama.css" rel="stylesheet" />
        @stack('after-style')
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('vendor/websekolah/assets') }}/img/favicon.ico" />
	</head>
	<body>
		<div class="kerangka-website">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 kiri">
							<strong class="logo"><a href="index.html"><img src="{{ asset('vendor/websekolah/assets') }}/img/logo.png" alt="Logo"></a></strong>
						</div>
						<div class="col-sm-8 kanan">

							<section class="user-navigation">
								<div class="container">
									<div class="frame pull-right">
										<div class="form-search pull-right">
											<form action="404.html">
												<fieldset>
													<div class="field-search">
														<input type="text" class="form-control input-sm" placeholder="Cari" />
														<button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
													</div>
												</fieldset>
											</form>
										</div>
										{{-- <div class="profiles-box pull-right active">
											<a href="#" class="link-profiles pull-left">Akun Resmi</a>
											<ul class="tools tools-middle pull-left">
												<li><a href="#" target="_blank"><span class="fa-icon-facebook-sign"></span></a></li>
												<li><a href="#" target="_blank"><span class="fa-icon-twitter"></span></a></li>
												<li><a href="#" target="_blank"><span class="fa-icon-google-plus"></span></a></li>
											</ul>
										</div> --}}
									</div>
								</div>
							</section>

							<section class="header-section">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											<!--  navbar start -->
											<nav class="navbar navbar-default navbar-business" role="navigation">
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
														<span class="sr-only">Toggle Navigasi</span>
														Menu Navigasi
														<span class="wrap-icon pull-left">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</span>
													</button>
												</div>
												<div class="collapse navbar-collapse">
													<span class="nook">&nbsp;</span>
													<ul class="nav navbar-nav">
														<li class="active"><a href="{{ route('home-index') }}">Beranda</a></li>
														<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Artikel</a>
														    <ul class="dropdown-menu">
														      <li><a href="identitas.html">Identitas</a></li>
														      <li><a href="visi-misi.html">Visi &amp; Misi</a></li>
														      <li><a href="sarana-prasarana.html">Sarana &amp; Prasarana</a></li>
														      <li><a href="program-kegiatan.html">Program &amp; Kegiatan </a></li>
														      <li><a href="prestasi.html">Lainnya</a></li>
														    </ul>
													    </li>
                                                        <li><a href="galeri.html">Galeri</a></li>
														{{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Kesiswaan</a>
														    <ul class="dropdown-menu">
														      <li><a href="daftar-siswa.html">Daftar Siswa</a></li>
														      <li><a href="daftar-guru.html">Daftar Guru &amp; Staff</a></li>
														      <li><a href="daftar-kelas.html">Daftar Kelas</a></li>
														    </ul>
													    </li> --}}
														<li><a href="buku-tamu.html">Buku Tamu</a></li>
                                                        <li><a href="{{ route('login-page') }}">SIAKAD</a></li>
														<li class="last">&nbsp;</li>
													</ul>
													<!--  frame pull-right start -->
													<div class="frame">
														<div class="form-search pull-right">
															<form action="404.html">
																<fieldset>
																	<div class="field-search">
																		<input type="text" class="form-control input-sm" placeholder="Cari" />
																		<button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
																	</div>
																</fieldset>
															</form>
														</div>
														<div class="profiles-box pull-left active">
															<ul class="tools tools-middle pull-right">
																<li><a href="#"><span class="fa-icon-facebook-sign"></span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</nav>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</header>

			<!-- Bagian Tengah -->
			<div class="tengah" id="main">
                @yield('home-main-content')
			</div>
			<!-- Bagian Bawah -->
			<div class="bawah">
				<footer id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-6">
								<p>&copy; 2014 Hak Cipta Dilindungi. Develop oleh <a href="http://novay.web.id/">Mahakam Team</a></p>
							</div>
							<div class="col-md-7 col-sm-6">
								<ul class="list list-inline pull-right">
									<li><a href="index.html">Beranda</a></li>
									<li><a href="kabar-sekolah.html">Kabar Sekolah</a></li>
									<li><a href="galeri.html">Galeri</a></li>
									<li><a href="buku-tamu.html">Buku Tamu</a></li>
									<li><a href="#top">Kembali Ke Atas</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<!-- Penutup Bagian Bawah -->
		</div>

		<!-- Koleksi Javascript -->
		<script type="text/javascript" src="{{ asset('vendor/websekolah/assets') }}/paket/js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="{{ asset('vendor/websekolah/assets') }}/paket/js/bootstrap.min.js"></script>
		<script src="{{ asset('vendor/websekolah/assets') }}/paket/js/less.js" type="text/javascript"></script>
		<script type="text/javascript" src="{{ asset('vendor/websekolah/assets') }}/paket/js/jquery.main.js"></script>
		<!--[if lte IE 9 ]>
			<script type="text/javascript" src="{{ asset('vendor/websekolah/assets') }}/paket/js/modernizr-1.7.min.js"></script>
			<script type="text/javascript" src="{{ asset('vendor/websekolah/assets') }}/paket/js/placeholder.js"></script>
		<![endif]-->
		<script src="{{ asset('vendor/websekolah/assets') }}/paket/js/jquery.onecarousel.min.js"></script>
        @stack('after-script')
		<script type="text/javascript">
			$(document).ready(function() { 
				"use strict";
				$('#onebyone_carousel').oneCarousel({
					easeIn: 'rotateIn',
					interval: 5000,
					responsive: true,
					height: 410,
					minHeight: 410,
					pause: 'hover'
				});
			});
		</script>
	</body>
</html>