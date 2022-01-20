<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'admin/proses.php';

$do = new ClassMobil();
error_reporting(0);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rental mobil</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<div class="top-header">
	<div class="container">
		
		<?php
		session_start();
		if(empty($_SESSION['namamember'])){
		?>
		<script type="text/javascript">
		function validasi_input(form){
		if (form.username.value == "" && form.password.value== ""){
		alert("Username atau password masih kosong!");
		form.username.focus();
		return (false);
		}
		return (true);
		}
		</script>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Daftar</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Masuk</a></li>
        </ul>
        <?php
		}else{
		?>
		<?php
		?>
<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Halo <?php echo"$_SESSION[nama]";?></a></li> 
			<li class="sigi"><a href="logout.php">/ Keluar</a></li>
        </ul>
		<?php
		}
		?>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Rental <span>Mobil</span> Honai </a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">Aman &amp; Terpecaya</div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="bus.php">Cari Mobil</a></li>
							<li><a href="about.php">Tentang</a></li>
								<li><a href="privacy.php">Privasi</a></li>
								<li><a href="#">Syarat dan ketentuan </a>  </li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner-1 ---->
<div class="banner-1 ">
	<div class="container">
	
	</div>
</div>
<!--- /banner-1 ---->
<!--- bus-tp ---->
<div class="bus-tp">
	<div class="container">
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /bus-tp ---->
<!--- bus-btm ---->
<div class="bus-btm">
	<div class="container">
		<ul>
			<li class="trav"><a href="#">Nama Mobil</a></li>
			<li class="dept"><a href="#">Warna</a></li>
			<li class="arriv"><a href="#">Tahun</a></li>
			<li class="perjalanan"><a href="#">Perjalanan</a></li>
			<li class="seat"><a href="#">No Polisi</a></li>
			<li class="kursi"><a href="#">Banyak Kursi</a></li>
			<li class="fare"><a href="#">Harga</a></li>
				<div class="clearfix"></div>
		</ul>
	</div>
</div>
<!--- /bus-btm ---->
<!--- bus-midd ---->
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  ---->
				<?php

	if (isset($_POST['cari']))  {
		$nama = $_POST['nama'];
		$kota_asal = $_POST['asal'];
		$kota_tujuan = $_POST['tujuan'];

		if ($kota_asal == null AND $kota_tujuan == null) {
			$no = 1;
		foreach ($do->cariNamaMobil($nama) as $value) {

		echo "<ul class='first'>
			<li class='trav'>
				<div class='bus-ic'>
					<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
				</div>
				</br></br></br></br></br>
				<div class='bus-txt'>
					
					<p style='color:black;'>$value[nama]</p>
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='dept'>
				<div class='bus-ic1'>
				<h4>$value[warna]</h4>
				</div>
				<div class='bus-txt1'>
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='arriv'>
				<div class'bus-txt2'>
					<h4>$value[tahun]</h4>
				</div>
			</li>
			<li class='perjalanan'>
				<div class'bus-txt2'>
					<h4>$value[kota_asal] - $value[kota_tujuan]</h4>
				</div>
			</li>
			<li class='seat'>
				<div class='bus-i'>
					<h4>$value[no_plat]</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='kursi'>
				<div class='bus-i'>
					<h4>$value[kursi] kursi</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='fare'>
				<div class='bus-txt4'>
					<h4>RP. $value[harga]</h4>
					<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
					<div class='clearfix'></div>
					</div>
					</li>
					<div class='clearfix'></div>
					</ul>"
					;
						$no++;
				}
		}
		else if ($nama == 'pilih') {
			$no = 1;
		foreach ($do->cariKotaMobil($kota_asal,$kota_tujuan) as $value) {

		echo "<ul class='first'>
			<li class='trav'>
				<div class='bus-ic'>
					<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
				</div>
				</br></br></br></br></br>
				<div class='bus-txt'>
					
					<p style='color:black;'>$value[nama]</p>
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='dept'>
				<div class='bus-ic1'>
				<h4>$value[warna]</h4>
				</div>
				<div class='bus-txt1'>
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='arriv'>
				<div class'bus-txt2'>
					<h4>$value[tahun]</h4>
				</div>
			</li>
			<li class='perjalanan'>
				<div class'bus-txt2'>
					<h4>$value[kota_asal] - $value[kota_tujuan]</h4>
				</div>
			</li>
			<li class='seat'>
				<div class='bus-i'>
					<h4>$value[no_plat]</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='kursi'>
				<div class='bus-i'>
					<h4>$value[kursi] kursi</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='fare'>
				<div class='bus-txt4'>
					<h4>RP. $value[harga]</h4>
					<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
					<div class='clearfix'></div>
					</div>
					</li>
					<div class='clearfix'></div>
					</ul>"
					;
						$no++;
				}
		}
		else if ($nama != 'pilih' AND $kota_asal != null AND $kota_tujuan != null)
		{
			$no = 1;
		foreach ($do->cariNamaKotaMobil($nama,$kota_asal,$kota_tujuan) as $value) {

		echo "<ul class='first'>
			<li class='trav'>
				<div class='bus-ic'>
					<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
				</div>
				</br></br></br></br></br>
				<div class='bus-txt'>
					
					<p style='color:black;'>$value[nama]</p>
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='dept'>
				<div class='bus-ic1'>
				<h4>$value[warna]</h4>
				</div>
				<div class='bus-txt1'>
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='arriv'>
				<div class'bus-txt2'>
					<h4>$value[tahun]</h4>
				</div>
			</li>
			<li class='perjalanan'>
				<div class'bus-txt2'>
					<h4>$value[kota_asal] - $value[kota_tujuan]</h4>
				</div>
			</li>
			<li class='seat'>
				<div class='bus-i'>
					<h4>$value[no_plat]</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='kursi'>
				<div class='bus-i'>
					<h4>$value[kursi] kursi</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='fare'>
				<div class='bus-txt4'>
					<h4>RP. $value[harga]</h4>
					<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
					<div class='clearfix'></div>
					</div>
					</li>
					<div class='clearfix'></div>
					</ul>"
					;
						$no++;
				}	
		}
				
}
			?>
	</div>
</div>
<!--- /bus-midd ---->
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Kategori Mobil</h3>
				<ul>
				 <?php
			$row = $do->selectMerek();
			$no = 1;
			foreach ($row as $val) {
				echo "<li><a href='bus.php?id=$val[0]'>$val[1]</a></li>";
				$no++;
			}
			?>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Perjalanan</h3>
				<ul>
			<?php
			$row = $do->selectKota();
			$no = 1;
			foreach ($row as $val) {
				echo "<li><a href='bus.php?kota=$val[0]'>$val[1] - $val[2]</a></li>";
				$no++;
			}
			?>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
		
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Honai Car © 2021-2022 </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-right">
												<form action="prosesdaftar.php" method="post">
													<h3>Buat akun Anda </h3>
													<input type="text" name="nama" placeholder="Masukan Nama lengkap anda">
													<input type="text" name="username" placeholder="Masukan Username anda">
													<input type="text" name="alamat" placeholder="Masukan Alamat anda">
													<input type="text" name="telepon" placeholder="Masukan Telepon anda">
													<input type="password" name="password" placeholder="Masukan Password anda">	
													<input type="text" name="noktp" placeholder="Masukan No KTP anda">	
													<input type="submit" name="daftar" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
										</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
											<h3>Masuk Dengan Akun Anda</h3>
											<input type="text" name="username" placeholder="Masukan Username anda">
											<input type="password" name="password" placeholder="Masukan password anda">
											<input type="submit" value="SIGNIN" name="masuk">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU</h4>
											<ul>
												<li class="na-me">
													<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
												</li>
												<li class="na-me">
													<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
												</li>
												<li class="na-me">
													<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="descrip">
													<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //write us -->
</body>
</html>