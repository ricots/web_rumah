<?php
include "koneksi.php";
$id_rumah = @$_GET['id_rumah'];
$data = mysql_query("select * from rumah where id_rumah = '$id_rumah'",$koneksi) or die(mysql_error());
while($hasil = mysql_fetch_array($data)){
?>


<table width="200" border="1">
  <tr>
    <td>
    <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $hasil['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    </tr>
</table>
<table width="270" border="0">
  <tr>
    <td width="85">judul</td>
    <td width="10">:</td>
    <td width="153"><?php echo $hasil['judul'] ?></td>
  </tr>
  <tr>
    <td>deskripsi</td>
    <td>:</td>
    <td><?php echo $hasil['deskripsi'] ?></td>
  </tr>
  <tr>
    <td>harga</td>
    <td>:</td>
    <td><?php echo $hasil['harga'] ?></td>
  </tr>
  <tr>
    <td>lokasi</td>
    <td>:</td>
    <td><?php echo $hasil['lokasi'] ?></td>
  </tr>
  <tr>
    <td>no telepon</td>
    <td>:</td>
    <td><?php echo $hasil['no_hp'] ?></td>
  </tr>
<?php
}
?>
</table>
