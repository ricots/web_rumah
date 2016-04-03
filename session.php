<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$db = mysql_select_db("penjualan_pkl", $connection);
 if (!isset($_SESSION)) {
session_start();// Memulai Session
// Menyimpan Session
 }
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select * from member", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nama_member'];
$nama_session =$row['id_member'];
if(!isset($nama_session)){
mysql_close($connection); // Menutup koneksi
//header('Location: ../web_rumah/owner/index.php'); // Mengarahkan ke Home Page
}
?>