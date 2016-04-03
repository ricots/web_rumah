<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" name="f_member" action="home.php?m=content&p=hasil_cari_member">
<table width="431" border="0">
  <tr>
    <td width="94">cari member</td>
    <td width="70">
    <input type="text" name="txtcari" placeholder="cari  alamat member" />
    </td>
    <td width="245">
    <input type="submit" name="btn_cari" value="cari" class="btn btn-info btn-block" />
    </td>
    
  </tr>
</table>

<table width="754" border="1">
  <tr>
  <td width="37">No</td>
    <td width="89">id member</td>
    <td width="136">nama member</td>
    <td width="169">alamat</td>
    <td width="126">no hp</td>
    <td width="157">password</td>
  </tr>
  <?php
include "../koneksi.php";
$ambil_data = mysql_query("select * from member order by id_member",$koneksi);
$no=1;
while($hasil_data = mysql_fetch_array($ambil_data)){
?>
  <tr>
  <td><?php echo $no++; ?></td>
    <td><?php echo $hasil_data['id_member'] ?></td>
    <td><?php echo $hasil_data['nama_member'] ?></td>
    <td><?php echo $hasil_data['alamat'] ?></td>
    <td><?php echo $hasil_data['no_hp'] ?></td>
    <td><?php echo $hasil_data['password'] ?></td>
  </tr>
  <?php
}
?>
</table>

</form>
</body>
</html>