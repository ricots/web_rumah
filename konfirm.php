<?php
include 'koneksi.php';
    $kode = $_GET['id_member'];
    $nama = $_GET['nama'];
 
    $query = mysql_query("UPDATE member SET ket = 'Y' WHERE kode = '".$kode."'") or die (mysql_error());
 
    if($query) {
        echo "Member dengan username <strong>".$username."</strong> telah diaktifkan";
    } else {
        echo "Gagal diaktifkan";
    }
?>