<html>
	<head>
		<title>Login Admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
					<h4><a href="index.php"> Home</a></h4>
					<h4><a href="jadwal.php"> Jadwal kuliah</a></h4>
					<h4><a href="siswa.php"> Database Sekolah</a></h4>
					
				</div>
			</header>
			<div id="main">
				<section id"login">
				<form method="post" action="dbadmin.php" onSubmit="return validasiForm(this)">
					<h1>Login Admin</h1>
					<div class="row">
							<div class="12u 12u$(small)">
								<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)"><input type="text" name="Username" id="Username" placeholder="Username" required/></div>
										
								</div><br>
								<div>
									<div class="6u$ 12u$(xsmall)"><input type="password" name="password" id="password" placeholder="Password" required/></div>
								</div>
							</div>
					</div>
					<div class="row uniform 50%">
							<ul class="actions">
								<li><input type="submit" value="Login" /></li>
							</ul>
					</div>
				</form>
				</section>
			</div>
				

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>