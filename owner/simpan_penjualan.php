<?php
include 'koneksi.php';
#tangkap gambar
  $lokasi_file = $_FILES['gbr_berita']['tmp_name'];
  $tipe_file   = $_FILES['gbr_berita']['type'];
  $nama_file   = $_FILES['gbr_berita']['name'];
  $direktori   = "../owner/gambar/$nama_file";
  // end of code B
  
  if (!empty($lokasi_file)) {
	move_uploaded_file($lokasi_file,$direktori); 

if($_POST['jenis'] == "Rumah")
{
	
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];
$no = $_POST['no'];
	
$sql = mysql_query("INSERT INTO rumah (id_member,id_rumah,judul,deskripsi,harga,no_hp,lokasi,gambar)
values('$id','','$judul','$deskripsi','$harga','$lokasi','$no','$nama_file')") or die(mysql_error()); 

}if($_POST['jenis'] == "Tanah"){
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];
$no = $_POST['no'];


$sql = mysql_query("INSERT INTO tanah (id_member,id_tanah,judul_tanah,deskripsi_tanah,harga_tanah,no_hp_tanah,lokasi_tanah,gambar_tanah)
values('$id','','$judul','$deskripsi','$harga','$lokasi','$no','$nama_file') ") or die(mysql_error());

}}
 $pesan = 'Data berhasil di simpan.';
echo '<script language="javascript">';
echo 'alert("'.$pesan.'")';
echo '</script>';
echo "<meta http-equiv='Refresh' content='0;url=index.php'>";
?>
