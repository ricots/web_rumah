<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" name="form1">
<p><center>Rekapan penjualan tanah</center></p>
<table width="1200" border="1" align="center">
  <tr>
    <td width="81">No</td>
    <td width="135">id_member</td>
    <td width="225">Judul</td>
    <td width="205">Deskripsi</td>
    <td width="138">Harga</td>
    <td width="151">Lokasi</td>
    <td width="219">Gambar</td>
  </tr>
  <?php
include "../koneksi.php";
$ambil_data = mysql_query("select * from tanah order by id_tanah desc",$koneksi);
$no=1;
while($hasil_data = mysql_fetch_array($ambil_data)){
?>
  <tr>
  <td><?php echo $no++; ?></td>
    <td><?php echo $hasil_data['id_member'] ?></td>
    <td><?php echo $hasil_data['judul_tanah'] ?></td>
    <td><?php echo $hasil_data['deskripsi_tanah'] ?></td>
    <td><?php echo $hasil_data['harga_tanah'] ?></td>
    <td><?php echo $hasil_data['lokasi_tanah'] ?></td>
    <td><img class="img-polaroid" src="../owner/gambar/<?php echo $hasil_data['gambar_tanah'];?>" style="width:50px; height: 20px; float:left; margin-right:10px;"/></td>
  </tr>
  <?php
}
?>
</table>

<p><center>Rekapan penjualan Rumah</center></p>
<table width="1200" border="1" align="center">
  <tr>
    <td width="81">No</td>
    <td width="139">id_member</td>
    <td width="221">Judul</td>
    <td width="205">Deskripsi</td>
    <td width="138">Harga</td>
    <td width="151">Lokasi</td>
    <td width="219">Gambar</td>
  </tr>
  <?php
include "../koneksi.php";
$sql = mysql_query("select * from rumah order by id_rumah desc",$koneksi);
$nomor=1;
while($data_rumah = mysql_fetch_array($sql)){
?>
  <tr>
  <td><?php echo $nomor++; ?></td>
    <td><?php echo $data_rumah['id_member'] ?></td>
    <td><?php echo $data_rumah['judul'] ?></td>
    <td><?php echo $data_rumah['deskripsi'] ?></td>
    <td><?php echo $data_rumah['harga'] ?></td>
    <td><?php echo $data_rumah['lokasi'] ?></td>
    <td><img class="img-polaroid" src="../owner/gambar/<?php echo $data_rumah['gambar'];?>" style="width:50px; height: 20px; float:left; margin-right:10px;"/></td>
  </tr>
  <?php
}
?>
</table>
</form>
</body>
</html>