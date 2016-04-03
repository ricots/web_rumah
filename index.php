<?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("Location: ../web_rumah/owner/index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	
  <title>Jual Rumah dan Tanah Malang Raya</title>
  <link href="styles.css" rel="stylesheet" type="text/css" media="screen">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<link rel="shortcut icon" href="favicon.png"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  
   <script src="aslider.js"></script>
        <style>
            .aslide {
                display: none;
            }
            .aslide img {
                  max-width:100%;              
            }
            .aslider {
                width: 890px;
                height: 311px;
				padding:30px;
            }
            .aslide .text {
                margin: 0 auto;
                color: #f8f8f8;
                text-shadow: 0 0 2px #000;
                font-weight: bold;
                font-size: 36px;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 30px;
                font-family: sans-serif;
            }
        </style>
</head>

<body>
<form id="form" name="form" action="" method="post">
<div id="content">
<div id="back">

<!-- header begins -->
<div id="header"> 
 <div id="menu1">
 cari : <input name="txtcari" type="text" class="text-danger" placeholder="silahkan lakuakn pencarian" size="40"/>
 <input type="submit" name="cari" value="cari" class="btn-info"/>
 <input type="reset" name="btnbatal" class="btn-danger" value="batal"/>
 </div>
	 <div id="menu">
 <nav>
		<ul><li><a href="index.php">Home</a></li>
			<li><a href="#">Jual Rumah</a>
              <ul>
              <li><a href="index.php?m=content&p=rumah">Jenis rumah</a></li>
                        </ul>
            </li>
			<li><a href="#" >Jual Tanah</a>
            <ul>
              <li><a href="index.php?m=content&p=tanah">Jenis tanah</a></li>
                        </ul>
            </li>
			<li><a href="index.php?m=content&p=kritik_saran" >Kritik Dan saran</a></li>
		
        </nav>
        </div>
	<div id="slider" class="aslider" data-duration="10" >
            <div class="aslide" data-duration="4" >
                <img src="images/rumah_1.jpg" />
                <div class="text">Rumah dengan harga terjangkau</div>
            </div>
            <div class="aslide" data-duration="5" data-audio="">
                <img src="images/tanah_1.jpg" />
                <div class="text">Tanah yang memiliki sertifikat</div>
            </div>
            <div class="aslide" data-duration="6" data-audio="">
                <img src="images/rumah_2.jpg" />
                <div class="text">Transaksi aman</div>
            </div>
            <div class="aslide" data-duration="7" data-audio="">
                <img src="images/tanah_2.jpg" />
                <div class="text">Pilihan tanah yang banyak</div>
            </div>
        </div>
	</div>
<!-- header ends -->
<!-- content begins -->
 <div id="main">
	<div id="right">
		<?php
        if (!isset($_GET['p'])) {
                include 'prakata.php';
            } else {
                $page = $_GET['p'];
                $modul = $_GET['m'];
                include  '/' . $page . ".php";
            }
            ?>	
			<!-- Modal -->
    <div style="margin-top:100px">
 <!--Link Yang akan memanggil Popup/Modal--> 
 
 </div>
 </center>
 </div>
 <!--Sisipkan File (Isi Modal) yang ada di Folder include-->
   <?php include "dialog.php";?>
	<script src="jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="aplikasi.js"></script>
        
	
	<div id="left">		
			<h3>Menu</h3>
			<ul><li class="m1"><ul><li><a href="#">Jual Rumah</a></li>
					<li><a href="#">Jual Tanah</a></li>
					<li><a href="#">Kritik Dan Saran</a></li>
					</ul></li>
                   
			</ul><br><h3>Login Member</h3>
			<br><ul><li>
				 <table width="275" border="0">
  <tr>
    <td width="55" height="27">username</td>
    <td width="18">&nbsp;</td>
    <td width="180"><label for="textfield2"></label>
      <input type="text" name="username" id="username" autocomplete="off"/></td>
  </tr>
  <tr>
    <td height="30">password</td>
    <td>&nbsp;</td>
    <td><label for="textfield2"></label>
      <input type="password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td height="36" colspan="3"><input type="submit" name="submit" id="submit" value="login" class="btn btn-info btn-block"/></td>
    </tr>
  <tr>
    <td colspan="3"><button name="login" id="login" class="btn btn-danger btn-block" data-toggle="modal" data-target="#contact">belum punya akun</button ></td>
  </tr>
              </table>
  
				  </ul></div>
	<div style="clear: both"></div>

<!--content ends -->
<!--
			//
			//	From Metamorphosis Design team:
			//
		
			We request you retain the full copyright notice below including the link to www.metamorphozis.com.
			This not only gives respect to the large amount of time given freely by the developers
			but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good
			reason) retain the full copyright we request you at least leave in place the
			Website Templates line, with Website Templates  linked to www.metamorphozis.com. If you refuse
			to include even this then support may be affected.
		
			You are allowed to use this design only if you agree to the following conditions:
			- You cannot remove copyright notice from this design without our permission.
			- You cannot use images from this design anywhere else without permission.
			- If you modify this design it still should contain copyright because it is based on our work.
		
			For support visit http://www.metamorphozis.com/contact/index_contact2.php
		
			The Metamorphosis Design : 2008
		
		// -->
<!--footer begins -->
	</div>

<div id="footer">
<p>Copyright pkl 2 © 2016
		</p>
	</div>
</div>
</div>
<!-- footer ends-->

</body>
</form>
</html>
