<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form_rekap" action="index.php?m=content&p=hasil_rekap" method="post">
<table>
<tr>
<td width="101">Pilih rekapan</td>
<td width="224"><label for="select"></label>
      <select name="txtjenis" id="select">
      <option>-silahkan pilih-</option>
      <option>Rumah</option>
      <option>Tanah</option>
      </select></td>
     
<td width="181">
<input type="submit" name="btn_rekap" id="btn_rekap" class="btn btn-primary" value="tampilkan"/>
</td>
      <tr>
</table>
<table width="700" border="1">
  <style>
  .txt{
  	color:#C00;
  }
  </style>
  <tr>
    <td width="81">id member</td>
    <td width="106">nama member</td>
    <td width="142">alamat</td>
    <td width="145">judul deskripsi</td>
    <td width="42">harga</td>
    <td width="42">lokasi</td>
    <td width="42">gambar</td>
  </tr>
  <tr>
    <td colspan="7" class="txt"><center>silahkan pilih untuk melihat rekapan</td>
  </tr>
</table>

</body>
</form>
</html>