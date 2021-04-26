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
										<div class="profiles-box pull-right active">
											<a href="#" class="link-profiles pull-left">Akun Resmi</a>
											<ul class="tools tools-middle pull-left">
												<li><a href="http://fb.me/novaymawbowo" target="_blank"><span class="fa-icon-facebook-sign"></span></a></li>
												<li><a href="http://twitter.com/NovayMawbowo" target="_blank"><span class="fa-icon-twitter"></span></a></li>
												<li><a href="http://google.com/+NovayMawbowo" target="_blank"><span class="fa-icon-google-plus"></span></a></li>
											</ul>
										</div>
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
														<li class="active"><a href="index.html">Beranda</a></li>
														<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Profil Sekolah</a>
														    <ul class="dropdown-menu">
														      <li><a href="identitas.html">Identitas</a></li>
														      <li><a href="visi-misi.html">Visi &amp; Misi</a></li>
														      <li><a href="sarana-prasarana.html">Sarana &amp; Prasarana</a></li>
														      <li><a href="program-kegiatan.html">Program &amp; Kegiatan </a></li>
														      <li><a href="prestasi.html">Prestasi</a></li>
														    </ul>
													    </li>
														<li><a href="#">Kurikulum</a></li>
														<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Kesiswaan</a>
														    <ul class="dropdown-menu">
														      <li><a href="daftar-siswa.html">Daftar Siswa</a></li>
														      <li><a href="daftar-guru.html">Daftar Guru &amp; Staff</a></li>
														      <li><a href="daftar-kelas.html">Daftar Kelas</a></li>
														    </ul>
													    </li>
														<li><a href="galeri.html">Galeri</a></li>
														<li><a href="buku-tamu.html">Buku Tamu</a></li>
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

				<section class="gallery">
					<div id="onebyone_carousel" class="carousel slide gallery-holder">
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{ asset('vendor/websekolah/assets') }}/img/01_slide_1.jpg" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
										<div class="hold-text pull-right">
											<strong class="title animate0 rotateIn" style="opacity: 0;">Selamat Datang</strong>
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Ini adalah website resmi SMK Negeri 1 Berau. Semoga dengan adanya website ini segala informasi dapat tersampaikan dengan <i>up-to-date.</i> Lihat Sambutan Kepala Sekolah kami di tombol berikut...</p>
											</div>
											<a href="#kepala-sekolah" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<img src="{{ asset('vendor/websekolah/assets') }}/img/01_slide_2.jpg" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
										<div class="hold-text pull-right">
											<strong class="title animate0 rotateIn" style="opacity: 0;">Biru, Hijau, Asri</strong>
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Dengan sangat bangga kami dedikasikan keindahan serta kecantikan sekolah kami dari dunia oleh dunia dan untuk dunia.</p>
											</div>
											<a href="#kepala-sekolah" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<img src="{{ asset('vendor/websekolah/assets') }}/img/01_slide_3.jpg" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
										<div class="hold-text pull-right">
											<strong class="title animate0 rotateIn" style="opacity: 0;">Find your Target.</strong>
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Choose one and take it home. Ngahahahaha XD</p>
											</div>
											<a href="#kepala-sekolah" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
						</div>
						<a class="link-prev carousel-control" href="#onebyone_carousel" data-slide="prev"><i class="im-icon-arrow-left-4"></i></a>
						<a class="link-next carousel-control" href="#onebyone_carousel" data-slide="next"><i class="im-icon-arrow-right-5"></i></a>
					</div><!-- /.carousel -->
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-6">
							
							<div class="container">
								<h2 style="font-family:Open Sans, sans-serif"><i class="fa-icon-info"></i> <b>Kabar Sekolah</b></h2>
								<hr/>
								
								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('vendor/websekolah/assets') }}/paket/images/img165.jpg" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>SEMANGAT BELAJAR MENGHADAPI UJIAN SEKOLAH</b></a>
											<small>Terbit pada tanggal 29 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">5 Komentar</a></small>
											</strong>
											<q>Haloo... para siswa siswi SMKN 1 Berau terutama kelas XII siap-siap ya tanggal xx - xx xxx 2014 kalian akan menghadapi Ujian Sekolah Tahun 2014 dimana jadwal ujiannya sudah ada di web SMKN 1 Berau. Jangan lupa selalu belajar biar kalian semua siap menghadapinya. Matikan TV, HP, Kom... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
								</div>

								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('vendor/websekolah/assets') }}/paket/images/img33.jpg" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>CLASS MEETING</b></a>
											<small>Terbit pada tanggal 28 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">12 Komentar</a></small>
											</strong>
											<q>Asslamualaikum kawan.. Tak terasa sudah mau bagi rapot dan class meeting sekolah kita yang seru sudah berakhir. Ini dia hasil pertandingan antar kelas (class meeting) SMKN 1 Berau. Selamat ya untuk kawan-kawan yang sudah menang :) FUTSAL PUTRA Juara 1 : XII... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
								</div>

								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('vendor/websekolah/assets') }}/paket/images/img166.jpg" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>DESIGN GEDUNG BARU</b></a>
											<small>Terbit pada tanggal 15 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">23 Komentar</a></small>
											</strong>
											<q>SMP Negeri 34 Samarinda sedang melakukan renovasi gedung yang insya Allah akan dapat dipergunakan mulai desember 2012. Berikut design gedung yang rencananya akan digunankan sebagai ruang kelas ini : Foto gedung tampak dari depan Foto gedung tampak dari samping... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
								</div>

								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('vendor/websekolah/assets') }}/paket/images/img167.jpg" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>SELAMAT DATANG WEBSITE RESMI SMKN 1 BERAU</b></a>
											<small>Terbit pada tanggal 10 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">3 Komentar</a></small>
											</strong>
											<q>Kami keluarga besar SMKN 1 Berau turut berbahagia atas launchingnya website sekolah kami yang dapat diakses langsung pada http://smkn1berau.sch.id. Semoga website ini kedepannya dapat membantu banyak hal terutama dalam penyampaian informasi kepada siswa, guru, maupun warga di luar sekolah. Website ini dibuat sebagai media komunikasi dan kepek... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
								</div>

								<div class="wrap-space">
									<ul class="pagination pagination-lg pagination-business">
										<li class="prev"><a href="404.html">«</a></li>
										<li class="active"><a href="404.html">1</a></li>
										<li><a href="404.html">2</a></li>
										<li><a href="404.html">3</a></li>
										<li><a href="404.html">4</a></li><li>
										<span>...</span></li>
										<li class="next"><a href="404.html">»</a></li>
									</ul>
								</div>
								
							</div>

						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="crewman crewman-center">
								<div class="frame sambutan" id="kepala-sekolah">
									<div class="hold-line">
										<span class="hold-img">
											<img class="img-circle" src="{{ asset('vendor/websekolah/assets') }}/img/img103.jpg" alt="image" width="210" height="210">
										</span>
										<strong class="title">Drs. H. Suhari</strong>
										<strong class="office">Kepala Sekolah</strong>
									</div>
									<div class="hold-line">
										<p>Assalamu'alaikum wr.wb.</p>
										<p>Dalam era globalisasi ini layanan informasi yang cepat dan akurat menjadi kebutuhan masyarakat modern. Informasi yang terdistribusi secara efektif diyakini menjadi penggerak partisipasi seluruh warga terutama pemangku kepentingan (stakeholders) untuk mendukung program, mewujudkan harmoni antarsesama warga sekolah, membuka kran komunikasi dan tentu saja merupakan media publikasi keunggulan sekolah kepada masyarakat.</p>
										<p>Web SMK Negeri 1 Berau hadir sebagai media komunikasi dan informasi untuk seluruh stakeholders dan masyarakat luas. Pengelolaan web ini berada di bawah kendali Mahakam Tim Samarinda. Meski demikian, untuk up-date data dan informasi diperlukan kerja sama sinergis dengan seluruh bidang dan unit di lingkungan SMK Negeri 1 Berau.</p>
										<p>Untuk sementara, menu yang tersedia masih terbatas. Akan tetapi ke depan akan senantiasa dikembangkan sesuai dengan dinamisasi dan kebutuhan yang relevan. Selamat datang dan selamat berkunjung di web SMKN 1 Berau. Silakan kontak kami untuk memberikan masukan dalam rangka mewujudkan SMKN 1 sebagai sekolah yang Insya Allah penuh berkah-rahmat-hidayah, nyaman dan  menyejukkan, religius, serta unggul dalam IPTEK.</p>
										<p>Wassalamuala'ikum wr.wb.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="link-penting">
						<div class="container">
							<h2 style="font-family:Open Sans">Link Penting</h2>
							<br/>
							<div class="row">
								<div class="gallery-partners">
									<div class="gallery-holder">
										<ul>
											<li>
												<ul class="list-partners">
													<li>
														<a href="404.html" title="Dinas Pendidikan">
															<img src="{{ asset('vendor/websekolah/assets') }}/img/logo-pendidikan.png" alt="image" width="118" height="115">
														</a>
													</li>
													<li><a href="404.html" title="Website Kalimantan Timur"><img src="{{ asset('vendor/websekolah/assets') }}/img/logo-kaltim.png" alt="image" width="118" height="103"></a></li>
													<li><a href="404.html" title="Pramuka Kaltim"><img src="{{ asset('vendor/websekolah/assets') }}/img/logo-pramuka.png" alt="image" width="97" height="98"></a></li>
													<li><a href="404.html" title="Kota Palembang"><img src="{{ asset('vendor/websekolah/assets') }}/img/logo-palembang.png" alt="image" width="89" height="98"></a></li>
													<li><a href="404.html" title="SMKN 1 Berau"><img src="{{ asset('vendor/websekolah/assets') }}/img/logo-smk.png" alt="image" width="90" height="111"></a></li>
													<li><a href="404.html" title="Persisam Samarinda"><img src="{{ asset('vendor/websekolah/assets') }}/img/logo-persisam.png" alt="image" width="97" height="98"></a></li>
													<li class="last">&nbsp;</li>
												</ul>
											</li>
										</ul>
									</div>
									<ul class="switcher">
										<li class="active"><a href="#">switcher</a></li><li>
											<a href="#">switcher</a></li><li>
											<a href="#">switcher</a></li>
									</ul>
								</div>
							</div>
						</div>
					</section>
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