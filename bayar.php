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
<title>Pembayaran</title>
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
							<li><a href="#">Syarat dan ketentuan </a></li>
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
<!--- banner-1 
<div class="banner-1">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Rental Mobil - Sewa mobil Murah</h1>
	</div>
</div> ---->
<!--- /banner-1 ---->
<!--- about ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
	<?php 

	$kodebooking = $_GET['kodebooking'];

					foreach ($do->infotagihan($kodebooking) as $value) {

	echo "<div class='selectroom_top'>
		
		<div id='pilih'>
		<h2>Sistem Pembayaran Mobil</h2>
			</br>
			<table>
			<tr>
			<td>Nama Mobil </td>
			<td>&nbsp : $value[nama]</td>
			</tr>
			<tr>
			<td>Warna Mobil</td>
			<td>&nbsp : $value[warna]</td>
			</tr>
			<tr>
			<td>Tahun </td>
			<td>&nbsp : $value[tahun]</td>
			</tr>
			<tr>
			<td>No Polisi Mobil </td>
			<td>&nbsp : $value[no_plat]</td>
			</tr>
			<tr>
			<td>Banyak Kursi </td>
			<td>&nbsp : $value[kursi]</td>
			</tr>
			<tr>
			<td>Dari kota </td>
			<td>&nbsp : $value[asal]</td>
			</tr>
			<tr>
			<td>Ke kota </td>
			<td>&nbsp : $value[tujuan]</td>
			</tr>
			<tr>
			<td>Tanggal Pinjam </td>
			<td>&nbsp : $value[tgl_pinjam]</td>
			</tr>
			<tr>
			<td>Tanggal Kembali </td>
			<td>&nbsp : $value[tgl_kembali]</td>
			</tr>
			<tr>
			<td>Nama Pemesan </td>
			<td>&nbsp : $value[nama_lengkap]</td>
			</tr>
			<tr>
			<td>Alamat Pemesan </td>
			<td>&nbsp : $value[alamat]</td>
			</tr>
			<tr>
			<td>Telepon </td>
			<td>&nbsp : $value[telepon]</td>
			</tr>
			<tr>
			<td>No KTP </td>
			<td>&nbsp : $value[no_ktp]</td>
			</tr>
			<tr>
			<td><b><i>Harga Total </i></b></td>
			<td><b><i>&nbsp : Rp. $value[harga]</i></b></td>
			</tr>
		  </table>
		  <br>
		  <h3>Silahkan transfer ke rekening berikut ini : </h3><br>
		  <img src='images/bni.jpg' height='30' width='30'> <b>988889987697</b><br><br>
		  <img src='images/bca.png' height='30' width='30'> <b>773858345668</b><br><br>
		  <img src='images/bri.png' height='30' width='30'> <b>539439332379</b><br><br>
		  </div>
		  </div>";
		}

	 ?>
<style type="text/css">
	.b{
		background-color: #eaeaea;
		padding: 10px;

	}
</style>
<button class='b' onclick="printContent('pilih')">Cetak Dokumen</pilih>
 <script>
function printContent(el){
 var restorepage = document.body.innerHTML;
 var printcontent = document.getElementById(el).innerHTML;
 document.body.innerHTML = printcontent;
 window.print();
 document.body.innerHTML = restorepage;
}
</script>
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
		
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">©  Honai Car © 2021-2022 </p>
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

			