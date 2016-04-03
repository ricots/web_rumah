<form id="form1" name="form1" method="post" action="">
cari lokasi  <input type="text" name="txtlokasi" id="txtlokasi"/>

<label for="textfield"></label>
<input type="button" name="button2" id="button" value="Submit" class="btn btn-primary" onclick="window.location = 'index.php?m=content&p=rumah_cari';" />
 <button style="margin-left:5%" name="cetak" id="cetak" onClick="document.form1.action = 'index.php?m=content&p=cari_rumah'; document.form1.target='_blank'; document.form1.cetak(); return false;">cetak</button>
<br />
<br />

<table width="487" border="1">
<tr>
<td>gambar</td>
<td width="84">harga</td>
<td>lokasi</td>
</tr>

  <tr>
  <?php
include "koneksi.php";
$ambil_data = mysql_query("select * from rumah");
while($hasil_data = mysql_fetch_array($ambil_data)){
?>
    <td width="260">
    <input type="hidden" name="id_rumah" value="<?php echo $hasil_data['id_rumah'] ?>"/>
    <img class="img-polaroid" src="../web_rumah/owner/gambar/<?php echo $hasil_data['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
    </td>
    <td><?php echo $hasil_data['harga'] ?></td>
    <td width="121"><?php echo $hasil_data['lokasi'] ?></td>
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

</form>
