<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
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
			<a href="index.php">Rental <span>Mobil</span> Honai</a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">Aman &amp; Terpecaya<br></div></li>
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
							<li><a href="bus.php">Daftar Mobil</a></li>
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

<!--- /banner-1 ---->
<!--- about ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	

		<?php

	$id = $_GET['pesan'];

					$value = $do->beliMobil($id);
						$m = $do->selectOneMobil($value[1]);
						$n = $do->selectOneKota($value[2]);

		echo "<div class='selectroom_top'>
			<div class='col-md-4 selectroom_left wow fadeInLeft animated' data-wow-delay='.5s'>
				<img src='gambar/".$m['gambar']."' class='img-responsive' alt=''>
			</div>
			<div class='col-md-8 selectroom_right wow fadeInRight animated' data-wow-delay='.5s'>
				<h2>$m[nama]</h2>
				<p>$n[1] - $n[2]</p>
				<ul>
						<li>
							<h4>Warna</h4>
							<h6>$m[4]</h6>
						</li>
						<li>
							<h4>Tahun</h4>
							<h6>$m[3]</h6>
						</li>
						<li>
							<h4>No Polisi</h4>
							<h6>$m[6]</h6>
						</li>
						<li>
							<h4>Banyak kursi</h4>
							<h6>$m[5]</h6>
						</li>
					</ul>
						<div class='clearfix'></div>
				<div class='grand'>
					<p>Harga Total</p>
					<h3>RP. $value[3]</h3>
				</div>
			</div>
			<div class='clearfix'></div>
		</div>"
					;
					?>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<br>
			<form method="post">
				<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
					<div class="bnr-right">
					<label class="inputLabel">Tanggal Pinjam</label>
					<input class="date" name="tglawal" id="datepicker" type="text" placeholder="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required=>
				</div>
				<div class="bnr-right">
					<label class="inputLabel">Tanggal Kembali<span class="opt">&nbsp;(Optional)</span></label>
					<input class="date" name="tglakhir" id="datepicker1" type="text" placeholder="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required=>
				</div>
				<br><br><br>
				<div class='bus-txt4'>
					<div class="sear">
					<button class="seabtn" name="book" id="book">Booking</button>
					</div>
						<div class='clearfix'></div>
				</div>
				<input type="hidden" name="idmobil" value="<?=$id?>">
				<input type="hidden" name="harga" value="<?=$value[3]?>">
				<input type="hidden" name="dari" value="<?=$n[1]?>">
				<input type="hidden" name="tuju" value="<?=$n[2]?>">
			</form>
			<?php
			if(isset($_POST['book'])){
				$idmobil = $_POST['idmobil'];
				$harga = $_POST['harga'];
				$dari = $_POST['dari'];
				$tuju = $_POST['tuju'];
				$tglawal = $_POST['tglawal'];
				$newDate1 = date("Y-m-d", strtotime($tglawal));
				$tglakhir = $_POST['tglakhir'];
				$newDate2 = date("Y-m-d", strtotime($tglakhir));
				$status = 1;
				$kode = $do->acak(10);
				$userid = $_SESSION['userid'];
				if(!empty($tglawal) and !empty($tglakhir)){
					//echo "<script>alert('$newDate1')</script>";
					$proses = $do->reservasi($idmobil,$userid,$kode,$harga,$dari,$tuju,$newDate1,$newDate2,$status);
				}else{
					echo "<script>alert('Tanggal tidak ada')</script>";
				}
			}
			
			?>
			<div class="clearfix"></div>
			<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->

			</div>
			
		</div>
	</div>
</div>
<!--- /selectroom ---->
<!--- /about ---->
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
				echo "<li><a href='#'>$val[1] - $val[2]</a></li>";
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
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2017 Rental Mobil . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">MH3</a> </p>
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
													<h3>Buat akun Anda</h3>
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
			
<!-- //write us -->
</body>
</html>

			