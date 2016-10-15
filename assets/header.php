<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Navbar</title>
	<link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style/style.css">
	<script src="style/jquery.min.js"></script>
	<script src="style/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div id="slideshow" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slideshow" data-slide-to="0" class="active"></li>
				<li data-target="#slideshow" data-slide-to="1"></li>
				<li data-target="#slideshow" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="style/img/header1.jpg" alt="">
					<div class="carousel-caption">
						<h3>Upacara Pembukaan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
					</div>
				</div>
				<div class="item">
					<img src="style/img/header2.jpg" alt="">
					<div class="carousel-caption">
						<h3>Upacara Pembukaan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
					</div>
				</div>
				<div class="item">
					<img src="style/img/header3.jpg" alt="">
					<div class="carousel-caption">
						<h3>Upacara Pembukaan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
					</div>
				</div>
			</div>
			<a href="#slideshow" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			</a>
			<a href="#slideshow" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<nav class="navbar navbar-inverse ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-justified" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"> </span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Sambutan Kepsek</a></li>
								<li><a href="#">Profil Kepala Sekolah</a></li>
								<li><a href="#">Visi & Misi</a></li>
								<li><a href="#">Sejarah</a></li>
								<li><a href="#">Daftar Pengajar</a></li>
								<li><a href="#">Kontak</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Berita</a></li>
								<li><a href="#">PPDB</a></li>
								<li><a href="#">Pengumuman</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ekstrakurikuler <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Paskibra</a></li>
								<li><a href="#">Pramuka</a></li>
								<li><a href="#">PMR</a></li>
								<li><a href="#">Basketball</a></li>
								<li><a href="#">Futsal</a></li>
								<li><a href="#">Merpati Putih</a></li>
								<li><a href="#">Karate</a></li>
								<li><a href="#">Taekwondo</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Mading <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Puisi</a></li>
								<li><a href="#">Cerpen</a></li>
								<li><a href="#">Pantun</a></li>
							</ul>
						</li>
						<li><a href="#">Galery</a></li>
					</ul>
					</ul>
					<form class="navbar-form navbar-right">
						<input type="text" class="form-control" placeholder="Search"><span></span>
						<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
			</nav>
		</div>