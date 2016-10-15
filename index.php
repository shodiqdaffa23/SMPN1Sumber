<?php require"assets/header.php" ?>
	<div class="container">
		<div class="sideleft col-md-3">
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><span><b>Login</b></span></h4>
					<div class="clear">	
						<form>
							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control" type="text" id="username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="passwod" id="password" class="form-control">
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
					<h4 class="title"><span><b>Salam Pembuka</b></span></h4>
				</div>
			</div>	
		</div>
		<?php include 'assets/home.php' ?>
		<div  class="sideright col-md-3">
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><span><b>Recent Post</b></span></h4>
					<div class="recent">
						<ul>
							<li><a href="#">Upacara Pembukaan</a></li>
							<li><a href="#">Upacara Pembukaan</a></li>
							<li><a href="#">Upacara Pembukaan</a></li>
							<li><a href="#">Upacara Pembukaan</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-body">
					<h4 class="title"><span><b>Recent Comment</b></span></h4>
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