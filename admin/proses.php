<?php
/**
 *
 */
class ClassMobil
{
  public $koneksi;
  function __construct()
  {
    $this->koneksi = mysqli_connect("localhost","root","","rentalmobil");
  }

  public function selectall($table)
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM $table");
    while ($val = mysqli_fetch_array($query)) {
      $data[] = $val;
    }
    return $data;
  }

  public function selectone($table,$id)
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE id='$id'");
    $val = mysqli_fetch_array($query);
    return $val;
  }

//   public function selectMobil(){
//     $query = mysqli_query($this->koneksi,"SELECT a.*, b.* FROM mobil a, kategori b WHERE a.id_merek=b.id
// ");
//     $val = mysqli_fetch_array($query);
//     return $val;
//   }

  public function insertMerek($merek)
  {
    $query = mysqli_query($this->koneksi,"INSERT INTO kategori(merek) VALUES ('$merek')");
    if($query){
      $msg = 'success!';
    }else{
      $msg = 'Gagal input';
    }
    return $msg;
  }

  public function insertKota($kotaAsal, $kotaTujuan)
  {
    $query = mysqli_query($this->koneksi,"INSERT INTO kota(kota_asal,kota_tujuan) VALUES
      ('$kotaAsal', '$kotaTujuan')");
    if($query){
      $msg = 'success!';
    }else{
      $msg = 'Gagal input';
    }
    return $msg;
  }
  public function insertHarga($mobil, $kota, $harga)
  {
    $query = mysqli_query($this->koneksi,"INSERT INTO harga(mobil,kota,harga) VALUES
      ('$mobil', '$kota','$harga')");
    if($query){
      $msg = 'success!';
    }else{
      $msg = 'Gagal input';
    }
    return $msg;
  }

  public function selectMerek()
  {
    $query = mysqli_query($this->koneksi,("SELECT * FROM kategori"));
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }

  public function selectKota()
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM kota");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }
     public function selectOneKota($id)
  {
    $query = mysqli_query($this->koneksi,("SELECT * FROM kota WHERE id='$id'"));
    $r = mysqli_fetch_array($query);
    return $r;
  }

  public function selectHarga()
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM harga");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }
     public function selectOneHarga($id)
  {
    $query = mysqli_query($this->koneksi,("SELECT * FROM harga WHERE id='$id'"));
    $r = mysqli_fetch_array($query);
    return $r;
  }

    public function deleteHarga($id)
  {
    $del = mysqli_query($this->koneksi,"DELETE FROM harga WHERE id='$id'");
    if ($del) {
    ?>
    <script>
    var cnf = confirm("berhasil menghapus harga")
    if (cnf) {location.href='awal.php?harga'}
    </script>
    <?php
    }else{
    echo "gagal menghapus data : ". $query->error;
    }
    return $del;
  }

  public function selectOneMerek($id)
  {
    $query = mysqli_query($this->koneksi,("SELECT * FROM kategori WHERE id='$id'"));
    $r = mysqli_fetch_array($query);
    return $r;
  }

  public function deleteMerek($id)
  {
    $del = mysqli_query($this->koneksi,"DELETE FROM kategori WHERE id='$id'");
    if ($del) {
                        ?>
                        <script>
                          var cnf = confirm("berhasil menghapus merek")
                          if (cnf) {location.href='awal.php?tambahmerek'}
                        </script>
                        <?php
                      }else{
                        echo "gagal menghapus data : ". $query->error;
                      }
    return $del;
  }

  public function deleteKota($id)
  {
    $del = mysqli_query($this->koneksi,"DELETE FROM kota WHERE id='$id'");
    if ($del) {
    ?>
    <script>
    var cnf = confirm("berhasil menghapus kota")
    if (cnf) {location.href='awal.php?kota'}
    </script>
    <?php
    }else{
    echo "gagal menghapus data : ". $query->error;
    }
    return $del;
  }

  public function insertMobil($merek,$nama,$tahun,$warna,$kursi,$platNo,$gambar)
  {
    $query = mysqli_query($this->koneksi,"INSERT INTO mobil(merek,nama,tahun,warna,kursi,no_plat,gambar) VALUES ('$merek','$nama','$tahun','$warna','$kursi','$platNo','$gambar')");
    if($query){
      $msg = 'success!';
    }else{
      $msg = 'Gagal input';
    }
    return $msg;
  }

  public function selectMobil()
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM mobil");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }

  public function deleteMobil($id)
  {
    $del = mysqli_query($this->koneksi,"DELETE FROM mobil WHERE id='$id'");
    if ($del) {
    ?>
    <script>
    var cnf = confirm("berhasil menghapus mobil")
    if (cnf) {location.href='awal.php?tambahMobil'}
    </script>
    <?php
    }else{
    echo "gagal menghapus data : ". $query->error;
    }
    return $del;
  }

  public function selectMobilKotaHarga(){
    $query = mysqli_query($this->koneksi,"SELECT a.*, b.*, b.id as idMobil, c.*, d.merek as namaMerek FROM harga a, mobil b, kota c, kategori d WHERE a.mobil=b.id AND a.kota=c.id AND b.merek=d.id");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }
  public function selectKategoriMobil($id){
    $query = mysqli_query($this->koneksi,"SELECT a.*, b.*, b.id as idMobil, c.*, d.merek as namaMerek FROM harga a, mobil b, kota c, kategori d WHERE a.mobil=b.id AND a.kota=c.id AND b.merek=d.id AND d.id='$id' ORDER BY b.id");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }
    public function selectKategoriPerjalanan($id){
    $query = mysqli_query($this->koneksi,"SELECT a.*, b.*, b.id as idMobil, c.*, d.merek as namaMerek FROM harga a, mobil b, kota c, kategori d WHERE a.mobil=b.id AND a.kota=c.id AND b.merek=d.id AND c.id='$id' ORDER BY b.id");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }


    public function selectOneMobil($id)
  {
    $query = mysqli_query($this->koneksi,("SELECT * FROM mobil WHERE id='$id'"));
    $r = mysqli_fetch_array($query);
    return $r;
  }
  public function selectSemuaCustomer()
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM customer");
    while ($r = mysqli_fetch_array($query)) {
      $data[] = $r;
    }
    return $data;
  }

  public function insertCustomer($namalengkap, $username, $alamat,$telepon,$password,$noktp)
  {
    $query = mysqli_query($this->koneksi,"INSERT INTO customer(nama_lengkap,username,alamat,telepon,password,no_ktp) VALUES
      ('$namalengkap', '$username', '$alamat','$telepon','$password','$noktp')");
    if ($query) {
      ?>
      <script>
        var cnf = confirm("Akun anda berhasil di buat silahkan Login")
        if (cnf) {location.href='../webrentalmobil/index.php'}
      </script>
      <?php
    }else{
      echo "gagal menambahkan data : ". $query->error;
    }
  }

  public function selectCustomer($username, $password)
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM customer WHERE username='$username' and password='$password'");
    $data = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);

    if ($data > 0){
      session_start();
	  $_SESSION['userid'] = $row['id'];
      $_SESSION['namamember'] = $row['username'];
      $_SESSION['nama'] = $row['nama_lengkap'];
      echo "<meta http-equiv='refresh' content='0; url=../webrentalmobil/index.php'>";
  }else{
    ?>
  <script type="text/javascript">
    alert("Username dan password tidak terdaftar...!!!");
  </script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=../webrentalmobil/index.php'>";
  }
  }
  public function deleteCustomer($id)
  {
    $del = mysqli_query($this->koneksi,"DELETE FROM customer WHERE id='$id'");
    if ($del) {
                        ?>
                        <script>
                          var cnf = confirm("berhasil menghapus user")
                          if (cnf) {location.href='awal.php?daftaruser'}
                        </script>
                        <?php
                      }else{
                        echo "gagal menghapus user : ". $query->error;
                      }
    return $del;
  }
  public function selectAdmin($username, $password)
  {
    $query = mysqli_query($this->koneksi,"SELECT * FROM admin WHERE admin='$username' and password='$password'");
    $data = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);

    if ($data > 0){
      session_start();
      $_SESSION['namadmin'] = $row['admin'];
      $_SESSION['nama'] = $row['admin'];
      echo "<meta http-equiv='refresh' content='0; url=awal.php'>";
  }else{
    ?>
  <script type="text/javascript">
    alert("Username dan password tidak terdaftar...!!!");
  </script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }
  }

  public function cariNamaMobil($nama){
      $query = mysqli_query($this->koneksi,"SELECT a.*, b.*, b.id as idMobil, c.*, d.merek as namaMerek 
                                            FROM harga a, mobil b, kota c, kategori d 
                                            WHERE a.mobil=b.id AND a.kota=c.id AND b.merek=d.id 
                                            AND b.nama='$nama'");
    while ($r = mysqli_fetch_array($query)) {
    $data[] = $r;
    }
    return $data;
  }
  public function cariKotaMobil($kota_asal,$kota_tujuan){
      $query = mysqli_query($this->koneksi,"SELECT a.*, b.*,b.id as idMobil, c.*, d.merek as namaMerek 
                                            FROM harga a, mobil b, kota c, kategori d 
                                            WHERE a.mobil=b.id AND a.kota=c.id AND b.merek=d.id 
                                            AND c.kota_asal='$kota_asal' AND c.kota_tujuan='$kota_tujuan'");
    while ($r = mysqli_fetch_array($query)) {
    $data[] = $r;
    }
    return $data;
  }

  public function cariNamaKotaMobil($nama,$kota_asal,$kota_tujuan){
      $query = mysqli_query($this->koneksi,"SELECT a.*, b.*,b.id as idMobil, c.*, d.merek as namaMerek 
                                            FROM harga a, mobil b, kota c, kategori d 
                                            WHERE a.mobil=b.id AND a.kota=c.id AND b.merek=d.id 
                                           AND b.nama='$nama' AND c.kota_asal='$kota_asal' AND c.kota_tujuan='$kota_tujuan'");
    while ($r = mysqli_fetch_array($query)) {
    $data[] = $r;
    }
    return $data;
  }

  public function beliMobil($id){
  $query = mysqli_query($this->koneksi,"SELECT a.*, b.*, c.*, d.merek as namaMerek FROM harga a, mobil b, kota c, kategori d WHERE b.id='$id' AND a.mobil=b.id AND a.kota=c.id AND b.merek=d.id ORDER BY b.id");
  $r = mysqli_fetch_array($query);
    return $r;
  }
  
  public function reservasi($idmobil,$userid,$kode,$harga,$dari,$tuju,$tglawal,$tglakhir,$status){
	  
	$query = mysqli_query($this->koneksi,"INSERT INTO reservasi(id_mobil,user_id,nobooking,harga,asal,tujuan,tgl_pinjam,tgl_kembali,status) 
	VALUES ('$idmobil','$userid','$kode','$harga','$dari','$tuju','$tglawal','$tglakhir','$status')");
	if ($query) {
      echo "
      <script>
        var cnf = confirm('Pesanan anda sedang di proses, silahkan melakukan pembayaran');
        if (cnf) {location.href='../webrentalmobil/bayar.php?kodebooking=$kode'}
      </script>
      ";
    }else{
      echo "gagal reservasi : " . mysqli_error();
    }
  }
  
  public function infotagihan($kodebooking){
	$query = mysqli_query($this->koneksi,"SELECT a.*, b.*, c.* FROM reservasi a, customer b, mobil c WHERE a.nobooking='$kodebooking' AND a.user_id=b.id AND a.id_mobil=c.id");
	while ($r = mysqli_fetch_array($query)) {
		$data[] = $r;
    }
    return $data;
  }
  public function semuainfotagihan(){
  $query = mysqli_query($this->koneksi,"SELECT a.*, b.*, c.* FROM reservasi a, customer b, mobil c WHERE a.user_id=b.id AND a.id_mobil=c.id");
  while ($r = mysqli_fetch_array($query)) {
    $data[] = $r;
    }
    return $data;
  }
  public function deletePesanan($id)
  {
    $del = mysqli_query($this->koneksi,"DELETE FROM reservasi WHERE id='$id'");
    if ($del) {
    ?>
    <script>
    var cnf = confirm("berhasil menghapus pesanan")
    if (cnf) {location.href='awal.php?daftarpesanan'}
    </script>
    <?php
    }else{
    echo "gagal menghapus data : ". $query->error;
    }
    return $del;
  }
  
  public function acak($jum){
	$pengacak = 'ABCDEFGHIJKLMNOPQRSTU1234567890';
	$string = '';
	for($i = 0; $i < $jum; $i++) {
	$pos = rand(0, strlen($pengacak)-1);
	$string .= $pengacak[$pos];
	}
	return $string;
  }

}
