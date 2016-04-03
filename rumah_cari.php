
  <?php
include "koneksi.php";
//if(isset($_POST['txtlokasi'])){
$txtlokasi = @$_POST['txtlokasi'];
$ambil_rumah = mysql_query("select * from rumah where lokasi = '$txtlokasi'") or die(mysql_error());

while($cari_rumah=mysql_fetch_array($ambil_rumah)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>gambar</td>
      <td>harga</td>
      <td>lokasi</td>
    </tr>
    <tr>
      <td>
      <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $cari_rumah['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
      </td>
      <td><?php echo $cari_rumah['harga'] ?></td>
      <td><?php echo $cari_rumah['lokasi'] ?></td>
    </tr>
    <?php
}
?>
  </table>
</form>
</body>
</html>