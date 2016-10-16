<?php require"assets/header.php" ?>
	<div class="container">
		<div class="sideleft col-md-3">
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><b>LOGIN</b></h4>
					<div class="clear">	
						<form>
							<div class="form-group">
								<input class="form-control" type="text" id="username" placeholder="Masukkan Username">
							</div>
							<div class="form-group">
								<input type="passwod" id="password" class="form-control" placeholder="Masukkan Password">
							</div>
							<div class="form-group pull-right">
								<button class="btn btn-info">Login</button>
								<button class="btn btn-info">Sign Up</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><b>SALAM PEMBUKA</b></h4>
				</div>
			</div>	
		</div>
		<?php include 'assets/home.php' ?>
		<div  class="sideright col-md-3">
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><b>RECENT POST</b></h4>
					<div class="recent">
						<ul>
							<li><a href="#">Upacara pembukaan MPLS di SMPN 1 Sumber Tahun Pelajaran 2016-2017</a></li>
							<li><a href="#">Pembagian Raport Kelas 7, 8 dan Rapat Orang Tua Siswa</a></li>
							<li><a href="#">SMPN 1 Sumber mengadakan Pesantren Kilat</a></li>
							<li><a href="#">Upacara Pembukaan</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><b>RECENT COMMENT</b></h4>
					<div class="recent">
						<ul>
							<li><a href="#">Hai</a></li>
							<li><a href="#">Halo</a></li>
							<li><a href="#">Halo</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require"assets/footer.php" ?>