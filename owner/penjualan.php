<?php
//session_start();
//if (empty($_SESSION['login_user'])) {
// jika belum login, maka dikembalikan ke file form_login.php
//}
include '../session.php';
?>
<form action="simpan_penjualan.php" method="post" name="form1" enctype="multipart/form-data">
<input type="hidden" name="id" id="textfield" value="<?php echo $nama_session ?>"/>
<table width="541" border="0">
  <tr>
    <td width="111">judul</td>
    <td width="10">:</td>
    <td width="411"><label for="textfield"></label>
      <input type="text" name="judul" id="textfield" autocomplete="off" />
      
      </td>
  </tr>
  <tr>
    <td>deskripsi</td>
    <td>:</td>
    <td><label for="textarea"></label>
      <textarea name="deskripsi" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
   <tr>
    <td>jenis penjualan</td>
    <td>:</td>
    <td><label for="select"></label>
      <select name="jenis" id="select">
      <option>-silahkan pilih-</option>
      <option>Rumah</option>
      <option>Tanah</option>
      </select></td>
  </tr>
  <tr>
    <td>harga</td>
    <td>:</td>
    <td><label for="textfield2"></label>
      <input type="text" name="harga" id="textfield2" /></td>
  </tr>
  <tr>
    <td>lokasi</td>
    <td>:</td>
    <td><label for="textarea2"></label>
      <textarea name="lokasi" id="textarea2" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>no telepon</td>
    <td>:</td>
    <td><label for="textfield3"></label>
      <input type="text" name="no" id="textfield3" autocomplete="off"/></td>
  </tr>
  <tr>
    <td>gambar</td>
    <td>:</td>
    <td><label for="textfield3"></label>
      <input type="file" id="inputGambar" name="gbr_berita" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="posting" class="btn btn-primary" />
      <input type="reset" name="button2" id="button2" value="batal" class="btn btn-danger"/></td>
  </tr>

</table>

</form>
