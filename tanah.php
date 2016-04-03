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
    <td width="114"><input type="submit" name="submit" id="submit" value="back" onclick="document.postform.action = 'index.php?m=content&p=cari_tanah'; document.postform.target='_self'; document.postform.Submit(); return false;"/></td>
  </tr>
</table>
<br />

<table width="388" border="1">
  <tr>
  <?php
include "koneksi.php";
$ambil_data = mysql_query("select * from tanah",$koneksi);
while($hasil_data = mysql_fetch_array($ambil_data)){
?>
    <td width="260">
    <input type="hidden" name="id_rumah" value="<?php echo $hasil_data['id_tanah'] ?>"/>
    <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $hasil_data['gambar_tanah'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    <td width="8">&nbsp;</td>
    <td width="98"><?php echo $hasil_data['harga_tanah'] ?></td>
  </tr>
  <tr>
    <td><a href="index.php?m=content&p=detail_tanah&id_tanah=<?php echo $hasil_data['id_tanah'] ?>"><input type="button" name="button" value="detail" class="btn btn-primary"/> </a></td>
  
    <td>&nbsp;</td>
    <td><?php echo $hasil_data['lokasi_tanah'] ?></td>
  </tr>
  
  <?php
}
?>
</table>

</form>
</body>
</html>
