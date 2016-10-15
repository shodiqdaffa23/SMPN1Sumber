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
<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-xs-12 col-md-12 col-xs-12">
				<div id="slideshow">
				   <div>
				     <img src="style/img/header1.jpg" class="full">
				   </div>
				   <div>
				     <img src="style/img/header2.jpg" class="full">
				   </div>
				   <div>
				     <img src="style/img/header3.jpg" class="full">
				   </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-inverse ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <div class="navbar-brand">SMPN 1 Sumber</div> -->
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