<?php 

include 'admin/proses.php';
$do = new ClassMobil();

if (isset($_POST['daftar'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	$Telepon = $_POST['telepon'];
	$password = $_POST['password'];
	$noktp = $_POST['noktp'];
	$do->insertCustomer($nama,$username,$alamat,$Telepon,$password,$noktp);
}

if (isset($_POST['masuk'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if($_POST['username']== $user && $_POST['password']== $pass){
		$do->selectCustomer($user,$pass);
}
}

 ?>