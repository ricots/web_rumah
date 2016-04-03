<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" name="f_cari_member" action="">
<table width="431" border="0">
  <tr>
    <td width="245">
    <input type="submit" name="back" id="back" value="kembali" class="btn btn-info btn-block"  onClick="document.f_cari_member.action = 'home.php?m=content&p=daftar_member'; document.f_cari_member.back"(); return false;"/>
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
$txtcari = $_POST['txtcari'];
$cari_member = mysql_query("select * from member where alamat like '%$txtcari%'",$koneksi);
$no=1;
while($cari = mysql_fetch_array($cari_member)){
?>
  <tr>
  <td><?php echo $no++; ?></td>
    <td><?php echo $cari['id_member'] ?></td>
    <td><?php echo $cari['nama_member'] ?></td>
    <td><?php echo $cari['alamat'] ?></td>
    <td><?php echo $cari['no_hp'] ?></td>
    <td><?php echo $cari['password'] ?></td>
  </tr>
  <?php
}
?>
</table>

</form>
</body>
</html>