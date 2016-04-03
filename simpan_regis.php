<?php
include 'koneksi.php';
define('ROOT', 'http://localhost/web_rumah/');
$pass = $_POST['pass'];
$id_member = $_POST['id_member'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];	
$sql = mysql_query("INSERT INTO member (id_member,nama_member,email,alamat,no_hp,password)
values('$id_member','$nama','$email','$alamat','$no','$pass')") or die(mysql_error());

$to  = $_POST['email'];
        $judul  = "Aktivasi Akun Anda";
        $dari   = "From: ranacan \n";
        $dari   .= "Content-type: text/html \r\n";
		$pesan  = "Klik link berikut untuk mengaktifkan akun: <br />";
        $pesan  .= "<a href='".ROOT."konfirm.php?email=".$_POST['email']."&kode=$id_member&id_member=".$_POST['id_member']."'>".ROOT."konfirm.php?email=".$_POST['email']."&id_member=$id_member</a>";
 
        $kirim  = mail($to, $judul, $pesan, $dari);
 
        if($kirim AND $sql)
        {
            echo "<p class=info>Berhasil Dikirim</p>";
        }
        else
        {
            echo "<p class=infoGagal>Gagal Dikirim</p>";
        }
		
$pesan = 'Data berhasil di simpan.';
echo '<script language="javascript">';
echo 'alert("'.$pesan.'")';
echo '</script>';
echo "<meta http-equiv='Refresh' content='0;url=index.php'>";    
?>