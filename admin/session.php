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
$ses_sql=mysql_query("select * from tbl_admin where username='$user_check'", $connection) or die(mysql_error());
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
header('Location: index.php'); // Mengarahkan ke Home Page
}
?>