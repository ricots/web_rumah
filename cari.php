<?php
 include 'koneksi.php';
$txtcari = @$_POST['txtcari'];
$query = mysql_query("select * from rumah, tanah where rumah.judul like  '%$txtcari%' or tanah.judul like  '%$txtcari%'",$koneksi);
while ($q = mysql_fetch_array($query)) {
?>
<table width="388" border="1">
  <tr>
    <td width="260">
    <input type="hidden" name="id_rumah" value="<?php echo $hasil_data['id_rumah'] ?>"/>
    <img class="img-polaroid" src="<?php echo $hasil_data['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    <td width="8">&nbsp;</td>
    <td width="98"><?php echo $hasil_data['harga'] ?></td>
  </tr>
  <tr>
    <td><a href="index.php?m=content&p=detail_rumah&id_rumah=<?php echo $hasil_data['id_rumah'] ?>"><input type="button" name="button" value="detail" class="btn btn-primary"/> </a></td>
  
    <td>&nbsp;</td>
    <td><?php echo $hasil_data['lokasi'] ?></td>
  </tr>
  
  <?php
}
?>
</table>