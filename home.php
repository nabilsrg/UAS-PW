<?php
	session_start();
	include"koneksi.php";
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	if (isset($_SESSION['username'])){
		$username=$_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nabil R. A. Siregar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="home.html">UTS</a></h1>
			<ul>
				<li class="active"><a href="home.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="kalkulator.html">KALKULATOR</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li><a href="aksi_logout.php">log out</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>Halo, Selamat Datang</h2>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Nabil. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
	
</body>
</html>