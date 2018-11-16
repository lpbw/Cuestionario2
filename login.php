<?php
session_start();
include "coneccion.php";
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
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<?php
$login= mysql_real_escape_string($_POST["login"]);
if($login!=""){

			$pass=mysql_real_escape_string($_POST["pass"]);
			
			$consulta  = "SELECT * from usuarios where deleted is null and email='$login' and pass=md5('$pass')";
			$resultado = mysql_query($consulta) or die("Error 1 $consulta <Br>".  mysql_error() );//. mysql_error()
			if(@mysql_num_rows($resultado)>=1){
            	$res=mysql_fetch_assoc($resultado);
				if($res['finalizar']==0){
                    $_SESSION['idU']=$res['id'];
					$_SESSION['nombreU']=$res['nombre'];
					echo"<script> window.location=\"menu.php\"</script>";
				}else{
					echo"<script>alert(\"Ya has finalizado\");</script>";
				}
			} else{
					echo"<script>alert(\"Usuario o password invalido\");</script>";
			}

}
?>
	<body>
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="index.php"><img src="img/logo.png" alt=""></a>
						</div>						 
					</div>
				</div>
			</div>
		</header> 
		<section class="contact-area pt-100 pb-100">
			<div class="container" >
				<div class="row align-items-center white-bg wrap-contact" >
				 	<div class="col-lg-2"></div>				
					<div class="col-lg-8" >
					<h3 class="about-title" align="center">Log In</h3>
						<form id="form1" action="" method="post" class="contact-form text-right">
							<input name="login" placeholder="Usuario" class="common-input mt-10" required type="text">
							<input name="pass" placeholder="Password" class="common-input mt-10" required type="password">
							<div class="banner-content text-center">
							<button class="float-left primary-btn primary circle d-inline-flex align-items-center mt-10 ml-auto" name="entrar" type="submit"><span class="mr-10">Entrar</span><span class="lnr lnr-arrow-right"></span></button>
							<button class="float-right primary-btn primary circle d-inline-flex align-items-center mt-10 ml-auto" name="inicio" type="button" onClick="window.location.href='index.php';"><span class="mr-10">Inicio</span><span class="lnr lnr-arrow-right"></span></button>
							</div>
							<div class="alert-msg"></div>
						</form>
					</div>
				</div>
			</div>
		</section>
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
		<script src="js/jquery.flipster.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>