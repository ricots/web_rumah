<?php
include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<table width="200" border="1">
  <tr>
    <td>gambar</td>
    <td>harga</td>
    <td>lokasi</td>
  </tr>
   <?php
   $txttanah = @$_POST['txttanah'];
			$query=mysql_query("select  * from tanah where lokasi_tanah = '$txttanah'") or die(mysql_error());	
			$no=1;										
			while($lihat=mysql_fetch_array($query)){
				?>	
  <tr>
    <td>
    <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $lihat['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    <td><?php echo $lihat['harga_tanah'] ?></td>
    <td><?php echo $lihat['lokasi_tanah'] ?></td>
  </tr>
  <?php
			}
	?>
</table>

</form>
</body>
</html>