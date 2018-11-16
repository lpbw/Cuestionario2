<?php
session_start();
include "coneccion.php";
include "checar_sesion.php";

$idU=$_SESSION['idU'];
$nombreU=$_SESSION['nombreU'];
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="Colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>BlueWolf</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,400,300,500,600" rel="stylesheet">
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="menu.php"><img src="img/logo.png" alt=""></a>
						</div>
						 <div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="logout.php">Log Out</a>
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<form class="form-horizontal form-material" name="form1" method="post" action="encuesta.php">
		<section class="sample-text-area">
			<div class="container">
				<h3 class="text-heading">Bienvenido <b><? echo $nombreU?></b></h3>
				<p class="sample-text">
					Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results:
				</p>
				<p class="sample-text">
				<input type="hidden" name="siguiente" value="0"><button class="float-left primary-btn primary circle d-inline-flex align-items-center mt-10 ml-auto" name="inicio"  type="submit"><span class="mr-10">Iniciar Encuesta</span><span class="lnr lnr-arrow-right"></span></button>
				</p>
			</div>
		</section>
		</form>	 
	</div>
	<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	<footer class="footer-area pt-40 pb-40">
		<div class="container">
			<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">				 
				<p class="footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Created by <a href="https://bluewolf.com.mx.com" target="_blank">BlueWolf</a></p>
				<div class="footer-social d-flex align-items-center">
					<a target="_blank" href="https://www.facebook.com/BlueWolf-Consulting-686886261324047/"><i class="fa fa-facebook"></i></a>
					<!--<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>-->
				</div>
			</div>
		</div>
	</footer>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>