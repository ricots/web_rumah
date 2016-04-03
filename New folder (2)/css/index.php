<?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("Location: ../web_rumah/owner/index.php");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="" rel="shortcut icon">
	
  <title>Jual Rumah dan Tanah Malang Raya</title><!-- Bootstrap core CSS -->
  <link href="styles.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet"><!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
  <![endif]-->
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
			<!-- Modal -->
    <div style="margin-top:100px">
 <!--Link Yang akan memanggil Popup/Modal--> 
 
 </div>
 </center>
 <!--Sisipkan File (Isi Modal) yang ada di Folder include-->
   <?php include "dialog.php";?>
	
        
	</div>
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
<script src="jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="aplikasi.js"></script>
</body>
</form>
</html>
