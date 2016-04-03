<?php
include('login.php');
 // Memasuk-kan skrip Login 
if(isset($_SESSION['login_user'])){
header("location: ../web_rumah/owner/index.php");
}
include 'koneksi.php';
$today=date("Ymd");
$query = "SELECT max(id_member) AS last FROM member WHERE id_member LIKE '$today%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
$lastNoUrut = substr($lastNoTransaksi, 8, 4);
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);
 
?>
<!-- Modal Pop Up -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
      <form name="form" action="" method="post">
       <table width="335" border="0">
       <tr>
    <td width="78">id member</td> 
    <td width="0">&nbsp;</td>
    <td width="235"><label for="textfield"></label>
      <input type="text" name="id_member" id="textfield" class="form-control" readonly="readonly" value="<?php echo $nextNoTransaksi; ?>"/></td>
  </tr>
  <tr>
    <td width="78">nama</td> 
    <td width="0">&nbsp;</td>
    <td width="235"><label for="textfield"></label>
      <input type="text" name="nama" id="textfield" class="form-control" autocomplete="off" /></td>
  </tr>
   <tr>
    <td width="78">Email</td> 
    <td width="0">&nbsp;</td>
    <td width="235"><label for="textfield"></label>
      <input type="email" name="email" id="textfield" class="form-control" autocomplete="off" /></td>
  </tr>
  
  <tr>
    <td>alamat</td>
    <td>&nbsp;</td>
    <td><label for="textfield2"></label>
      <input type="text" name="alamat" id="textfield2" class="form-control" autocomplete="off"/></td>
  </tr>
  <tr>
    <td>no telepon</td>
    <td>&nbsp;</td>
    <td><label for="textfield3"></label>
      <input type="text" name="no" id="textfield3" class="form-control" autocomplete="off" /></td>
  </tr>
  <tr>
    <td>password</td>
    <td>&nbsp;</td>
    <td><label for="textfield4"></label>
      <input type="text" name="pass" id="textfield4" class="form-control" autocomplete="off"/></td>
  </tr>
  <tr>
    <td colspan="3"><button name="Registrasi" id="Registrasi" class="btn btn-info btn-block" onClick="document.form.action = 'simpan_regis.php';">Registrasi</button></td>
    </tr>
  <tr>
    <td colspan="3"><input type="reset" name="batal" id="batal" value="batal" class="btn btn-danger btn-block" data-dismiss="modal"/></td>
  </tr>
</table>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>