<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" name="postform" id="postform">
<table width="386" border="0">
  <tr>
    <td width="81">cari lokasi</td>
    <td width="169"><label for="textfield"></label>
      <input type="text" name="txttanah" id="txttanah" placeholder="cari lokasi tanah" /></td>
    <td width="114"><input type="submit" name="submit" id="submit" value="back" onclick="document.postform.action = 'cari.php'; document.postform.target='_self'; document.postform.Submit(); return false;"/></td>
  </tr>
</table>
<br />

<table width="200" border="1">
  <tr>
    <td>lokasi</td>
    <td>harga</td>
  </tr>
  <?php
include "koneksi.php";
$ambil_data = mysql_query("select * from tanah",$koneksi);
while($hasil_data = mysql_fetch_array($ambil_data)){
?>
  <tr>
    <td><?php echo $hasil_data['lokasi_tanah'] ?></td>
    <td><?php echo $hasil_data['harga_tanah'] ?></td>
  </tr>
  <?php
}
  ?>
</table>

</form>
</body>
</html>