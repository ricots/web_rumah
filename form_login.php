<?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Siswa Prakerin</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="styl.css"/>
  
  </head>	
  <style>
.tengah{

}
</style>
  <body>
	<div class="container">
		<div class="main" align="center">
	      <form action="" method="post">
			<h2>FORM LOGIN GURU</h2><hr/>		
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div>

  </body>
</html>






