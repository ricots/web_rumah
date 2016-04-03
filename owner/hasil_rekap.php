 <?php
include '../session.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<style>
 .txt1{
 color:#F00;
 }
 </style>
 
<form action="" name="form_cari" method="post">
<h3>Hasil Rekapan penjualan anda</h3>
<table width="200" border="1">
    <?php
include "koneksi.php";
if($_POST['txtjenis'] == "Rumah")
{
$ambil_data = mysql_query("select * from member_rumah where nama_member = '". $_SESSION["login_user"] ."'",$koneksi) or die(mysql_error());
?>

  <tr>
    <td>id_member</td>
    <td>nama_membar</td>
    <td>alamat</td>
    <td>judul</td>
    <td>deskripsi</td>
    <td>harga</td>
    <td>lokasi</td>
    <td>gambar</td>
  </tr>
<?php
while($hasil_data = mysql_fetch_array($ambil_data)){
?>
  <tr>
    <td><?php echo $hasil_data['id_member'] ?></td>
    <td><?php echo $hasil_data['nama_member'] ?>;</td>
    <td><?php echo $hasil_data['alamat'] ?></td>
    <td><?php echo $hasil_data['judul'] ?></td>
    <td><?php echo $hasil_data['deskripsi'] ?></td>
    <td><?php echo $hasil_data['harga'] ?></td>
    <td><?php echo $hasil_data['lokasi'] ?>;</td>
    <td>&nbsp;</td>
  </tr>
<?php
}
echo '<td class="txt1" rowspan="0" colspan="9" align="center">Hasil Rekapan tidak ada</td>';
}

?>
</table>

<table width="200" border="1">
  <tr>
    <?php
include "koneksi.php";
if($_POST['txtjenis'] == "Tanah")
{
$data = mysql_query("select * from member_tanah where nama_member = '". $_SESSION["login_user"] ."'",$koneksi) or die(mysql_error());
?>
    <td>id_member</td>
    <td>nama_membar</td>
    <td>alamat</td>
    <td>judul</td>
    <td>deskripsi</td>
    <td>harga</td>
    <td>lokasi</td>
    <td>gambar</td>
  </tr>
  <?php
  while($data_tanah = mysql_fetch_array($data)){
  ?>
  <tr>
    <td><?php echo $data_tanah['id_member'] ?></td>
    <td><?php echo $data_tanah['nama_member'] ?>;</td>
    <td><?php echo $data_tanah['alamat'] ?></td>
    <td><?php echo $data_tanah['judul_tanah'] ?></td>
    <td><?php echo $data_tanah['deskripsi_tanah'] ?></td>
    <td><?php echo $data_tanah['harga_tanah'] ?></td>
    <td><?php echo $data_tanah['lokasi_tanah'] ?>;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
}
echo '<td class="txt1" rowspan="0" colspan="9" align="center">Hasil Rekapan tidak ada</td>';
}
?>
</table>

</form>
</body>
</html>