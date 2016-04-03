<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Jual Rumah Dan Tanah Malang Raya</title>

<link href="styles.css" rel="stylesheet" type="text/css" media="screen">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<link rel="shortcut icon" href="favicon.png"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    </head>
<body>
<div id="content">
<div id="back">
<!-- header begins -->
<div id="header"> 
	 <div id="menu">
		<ul><li><a href="index.php">Home</a></li>
			<li><a href="index.php?m=content&p=penjualan">Posting Penjualan</a></li>
			<li><a href="index.php?m=content&p=rekapan" >Rekapan</a></li>
			<li><a href="logout.php" >Keluar</a></li>
		</ul></div>
	<div id="logo">
		
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
	</div>
	<div id="left">		
			<h3>Menu</h3>
			<ul><li class="m1"><ul><li><a href="#">Posting Penjualan</a></li>
					<li><a href="#">Rekapan</a></li>
					<li><a href="#">Keluar</a></li>
					</ul></li>
			</ul><br>
  
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
<script src="jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="aplikasi.js"></script>
</body></html>
