<html>
	<head>
		<title>Sing Up</title>
		<SCRIPT language="javascript" type="text/javascript" src="ckck.js"></script>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
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


		<!--singup -->
		<div id="main">
			<section id="singup">
				<form id="form1" name="register" method="post" action="singup_aksi.php" target="post">
						<h1>Sing Up</h1>
						<div class="row">
							<div class="8u 12u$(small)">
								<div class="row uniform 50%">
										<div class="12u$ 12u$(xsmall)">
 											<input type="text" name="username" id="username" placeholder="Username" required/>
 										</div>
										<div class="6u 12u$(xsmall)"><input type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" minLength="2" required/></div>
										<div class="6u$ 12u$(xsmall)"><input type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" minLength="2" required/></div>
										<div class="12u$ 12u$(xsmall)"><input type="text" name="asal" id="asal" placeholder="Alamat" required/></div>
										<div class="row uniform 50%">
											
												<div class="row uniform 50%" required>
												<h4>Birth </h4>
													<div class="3u 12u$(xsmall)">
														<select name="tgl_lahir"  id="tgl_lahir" required >
     														<option value="" selected="">Tanggal</option>
    														<option value="1">1</option>
    														<option value="2">2</option>
    														<option value="3">3</option>
    														<option value="4">4</option>
    														<option value="5">5</option>
    														<option value="6">6</option>
    														<option value="7">7</option>
    														<option value="8">8</option>
    														<option value="9">9</option>
    														<option value="10">10</option>
    														<option value="11">11</option>
    														<option value="12">12</option>
    														<option value="13">13</option>
    														<option value="14">14</option>
    														<option value="15">15</option>
    														<option value="16">16</option>
    														<option value="17">17</option>
    														<option value="18">18</option>
    														<option value="19">19</option>
    														<option value="20">20</option>
    														<option value="21">21</option>
    														<option value="22">22</option>
    														<option value="23">23</option>
    														<option value="24">24</option>
    														<option value="25">25</option>
    														<option value="26">26</option>
    														<option value="27">27</option>
    														<option value="28">28</option>
    														<option value="29">29</option>
    														<option value="30">30</option>
    														<option value="31">31</option>
 														</select>
 													</div>
													<div class="4u 12u$(xsmall)">
														<select name="bulan_lahir" id="bulan_lahir" required>
     														<option value="" selected="">Bulan</option>
    														<option value="Januari">Januari</option>
    														<option value="Februari">Februari</option>
    														<option value="Maret">Maret</option>
    														<option value="April">April</option>
    														<option value="Mei">Mei</option>
    														<option value="Juni">Juni</option>
    														<option value="Juli">Juli</option>
    														<option value="Agustus">Agustus</option>
    														<option value="September">September</option>
    														<option value="Oktober">Oktober</option>
    														<option value="November">November</option>
    														<option value="Desember">Desember</option>
 														</select>
 													</div>
 													<div class="3u 12u$(xsmall)">
														<select name="tahun_lahir" id="tahun_lahir" required>
     														<option value="" selected="">Tahun</option>
    														<option value="1990">1990</option>
    														<option value="1991">1991</option>
    														<option value="1992">1992</option>
    														<option value="1993">1993</option>
    														<option value="1994">1994</option>
    														<option value="1995">1995</option>
    														<option value="1996">1996</option>
    														<option value="1997">1997</option>
    														<option value="1998">1998</option>
    														<option value="1999">1999</option>
    														<option value="2000">2000</option>
    														<option value="2001">2001</option>
    														<option value="2002">2002</option>
    														<option value="2003">2003</option>
    														<option value="2004">2004</option>
    														<option value="2005">2005</option>
 														</select>
 													</div>
													
										</div>
										<div class="12u$ 12u$(xsmall)" name="kelamin" id="kelamin" required>
										<div class="row uniform 50%">
											<h4>Gender</h4>
												<div class="10u 12u$(xsmall)">
														<select name="kelamin"  id="kelamin" required>
     														<option value="" selected="">Jenis Kelamin</option>
    														<option value="laki_laki">Laki-Laki</option>
    														<option value="perempuan">Perempuan</option>
    													</select>
    											</div>
										</div>
										</div>
									</div>
						</div>
						<div class="row uniform 50%">
								
								<div class="12u 12u$(xsmall)">
										<input type="email" name="email" placeholder="Email                                                                  sample: zidan@gmail.com" id="email" required>
 								</div>
 								<div class="12u$ 12u$(xsmall)">
										<input type="text" name="hp" id="hp" placeholder="Nomor Handphone" onkeypress="return hanyaAngka(event, false)" required/>
								</div>
 								<div class="12u$ 12u$(xsmall)">
 										<input type="password" name="password" id="password" minLength="8" placeholder="Password" required/>
								</div>
						</div>
						</form>
						<div class="row uniform 50%">
								<ul class="actions">
									<li><input type="submit" name="submit" value="Submit" /></li>
								</ul>
						</div>
					</section>
		</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="actions">
							<li>
								<a href="login.php" class="button">Login</a>
							</li>
					</ul>
					<ul class="actions">
							<li>
								<a href="singup.php" class="button">Sing Up</a>
							</li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li><li>Login: <a href="admin.php">Admin</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
   
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }
	</script>

			<script type="text/javascript" scr="jquery.validate.min.js"></script>
			<script type="text/javascript" scr="jquery-3.1.1.js"></script>
			<script type="text/javascript" scr="jquery.form.js"></script>
			<script type="text/javascript">
			$.validator.setDefaults({
				submitHandler: function(){
					alert("sudah Tersubmit");
				}
			});
			$("#form1").validate({
				rules:{
					nama_depan:{
						required:true,
						minlenght:2
					},
					nama_belakang:{
						required:true,
						minlenght:2
					},
					password:{
						required:true,
						minlenght:8
					}
					email: {
					required: true,
					email: true
					},
				}
				message:{
					nama_depan:"Masukkan nama depan anda ( Minimal 2 karakter)",
					nama_belakang:"Masukkan nama belakang anda ( Minimal 2 karakter)",
					email: "Isi email yang benar",
					password:{
						required:"Masukkan password Anda",
						minlength:"Masukkan password Anda minimal 8 karakter"
					}
				}
			})
			</script>
	</body>
</html>