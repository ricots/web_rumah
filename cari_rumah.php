  <?php
include "koneksi.php";
//if(isset($_POST['txtlokasi'])){
$txtlokasi = @$_POST['txtlokasi'];
$ambil_rumah = mysql_query("select * from rumah where lokasi = '$txtlokasi'");

while($cari_rumah=mysql_fetch_array($ambil_rumah)){
?>
<html lang="en">
<head>

  
	
  <title>Jual Rumah dan Tanah Malang Raya</title><!-- Bootstrap core CSS -->
  <link href="styles.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet"><!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  </head>
<table width="487" border="1">
<tr>
<td>gambar</td>
<td width="84">harga</td>
<td>lokasi</td>
</tr>

  <tr>

    <td width="260">
    <input type="text" name="txtid" value="<?php echo $cari_rumah['id_rumah'] ?>"/>
    <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $cari_rumah['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    <td><?php echo $cari_rumah['harga'] ?></td>
    <td width="121"><?php echo $cari_rumah['lokasi'] ?></td>
  </tr>
  <tr>
    <td><a href="admin/index.php?m=content&p=detail_rumah&id_rumah=<?php echo $hasil_data['id_rumah'] ?>"><input type="button" name="button" value="detail" class="btn btn-primary"/> </a></td>
  
    <td></td>
    <td></td>
  </tr>
  
  <?php
}
?>
</table>
</html>


