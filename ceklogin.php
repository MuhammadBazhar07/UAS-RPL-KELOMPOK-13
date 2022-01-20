<?php 
include 'admin/proses.php';
$do = new ClassMobil();
 ?>
<?php
session_start();
if(empty($_SESSION['namamember'])){
?>
	<script type="text/javascript">
		alert("Untuk melakukan pemesanan Mobil, anda diwajibkan untuk Log In terbelih dahulu.\nJika belum menjadi member, silahkan mendaftar terlebih dahulu...!!!");
	</script>

<?php
	echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
}else{
	$pesan = $_GET['pesan'];
	echo "<meta http-equiv='refresh' content='0; url=reservasi.php?pesan=$pesan'>";
}

?>