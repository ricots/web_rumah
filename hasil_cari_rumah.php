<?php
include "koneksi.php";
$txtlokasi = @$_POST['txtlokasi'];
$sql_cari = mysql_query("select * from rumah where lokasi LIKE '%$txtlokasi%'") or die(mysql_error());
while($cari = mysql_fetch_array($sql_cari)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="487" border="1">
<tr>
<td>gambar</td>
<td width="84">harga</td>
<td>lokasi</td>
</tr>
  <tr>
    <td width="260">
    <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $cari['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    <td><?php echo $cari['harga'] ?></td>
    <td width="121"><?php echo $cari['lokasi'] ?></td>
  </tr>
  <tr>
    <td><a href="index.php?m=content&p=detail_rumah&id_rumah=<?php echo $hasil_data['id_rumah'] ?>"><input type="button" name="button" value="detail" class="btn btn-primary"/> </a></td>
  
    <td></td>
    <td></td>
  </tr>
  
  <?php
}
?>
</table>
</body>
</html>