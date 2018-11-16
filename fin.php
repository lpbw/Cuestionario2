<?php
session_start();
include "coneccion.php";
include "checar_sesion.php";

$idU=$_SESSION['idU'];
$nombreU=$_SESSION['nombreU'];

if( isset($_POST['siguiente2']) ){

	if($_POST['r41']){
			
			$consulta4  = "select * from resultados where id_pregunta=41 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r41']."' where id_pregunta=41 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 41, '".$_POST['r41']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r42']){
			
			$consulta4  = "select * from resultados where id_pregunta=42 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r42']."' where id_pregunta=42 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 42, '".$_POST['r42']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r43']){
			
			$consulta4  = "select * from resultados where id_pregunta=43 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r43']."' where id_pregunta=43 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 43, '".$_POST['r43']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r44']){
			
			$consulta4  = "select * from resultados where id_pregunta=44 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r44']."' where id_pregunta=44 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 44, '".$_POST['r44']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		//archivo
		if($_FILES["r45"]["name"]!=""){	
			$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 45, '')";
			$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			$id_insert2=mysql_insert_id();	
			if ($_FILES["r45"]["error"]> 0 )  {
  				//echo "Error imagen: " . $_FILES["file"]["error"] . "<br />";	
  			}else {	  
 	 					 		$allowed_ext = array("jpeg", "jpg", "gif", "png");
	  							$nom="archivos/".$id_insert2."_".$_FILES["r45"]["name"];
	 							$nom2="".$id_insert2."_".$_FILES["r45"]["name"];
								if(move_uploaded_file($_FILES["r45"]['tmp_name'], $nom)){
								$consulta1  = "update resultados set valor='$nom2' where id=$id_insert2";
								$resultado1 = mysql_query($consulta1) or die("Error en operacion: $consulta1" . mysql_error());	
								}else{
									echo"Error uploading archive";
								}	
  				}
			
		}//fin archivo
		if($_POST['r46']){
			
			$consulta4  = "select * from resultados where id_pregunta=46 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r46']."' where id_pregunta=46 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 46, '".$_POST['r46']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r47']){
			
			$consulta4  = "select * from resultados where id_pregunta=47 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r47']."' where id_pregunta=47 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 47, '".$_POST['r47']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r48']){
			
			$consulta4  = "select * from resultados where id_pregunta=48 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r48']."' where id_pregunta=48 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 48, '".$_POST['r48']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r49']){
			
			$consulta4  = "select * from resultados where id_pregunta=49 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r49']."|".$_POST['r49_1']."|".$_POST['r49_2']."' where id_pregunta=49 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 49, '".$_POST['r49']."|".$_POST['r49_1']."|".$_POST['r49_2']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r50']){
			
			$consulta4  = "select * from resultados where id_pregunta=50 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r50']."' where id_pregunta=50 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 50, '".$_POST['r50']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r51']){
			
			$consulta4  = "select * from resultados where id_pregunta=51 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r51']."' where id_pregunta=51 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 51, '".$_POST['r51']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r52']){
			
			$consulta4  = "select * from resultados where id_pregunta=52 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r52']."' where id_pregunta=52 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 52, '".$_POST['r52']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r53']){
			
			$consulta4  = "select * from resultados where id_pregunta=53 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r53']."' where id_pregunta=53 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 53, '".$_POST['r53']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r54_1'] || $_POST['r54_2'] || $_POST['r54_3'] || $_POST['r54_4'] || $_POST['r54_5'] || $_POST['r54_6'] || $_POST['r54_7'] || $_POST['r54_8'] || $_POST['r54_9'] || $_POST['r54_10'] || $_POST['r54_11'] || $_POST['r54_12'] || $_POST['r54_13'] || $_POST['r54_14'] || $_POST['r54_15'] || $_POST['r54_16'] || $_POST['r54_17'] || $_POST['r54_18'] || $_POST['r54_19'] || $_POST['r54_20'] || $_POST['r54_21'] || $_POST['r54_22'] || $_POST['r54_23'] || $_POST['r54_24'] || $_POST['r54_25'] || $_POST['r54_26'] || $_POST['r54_27'] || $_POST['r54_28'] || $_POST['r54_29'] || $_POST['r54_30']){
			
			$consulta4  = "select * from resultados where id_pregunta=54 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r54_1']."|".$_POST['r54_2']."|".$_POST['r54_3']."|".$_POST['r54_4']."|".$_POST['r54_5']."|".$_POST['r54_6']."|".$_POST['r54_7']."|".$_POST['r54_8']."|".$_POST['r54_9']."|".$_POST['r54_10']."|".$_POST['r54_11']."|".$_POST['r54_12']."|".$_POST['r54_13']."|".$_POST['r54_14']."|".$_POST['r54_15']."|".$_POST['r54_16']."|".$_POST['r54_17']."|".$_POST['r54_18']."|".$_POST['r54_19']."|".$_POST['r54_20']."|".$_POST['r54_21']."|".$_POST['r54_22']."|".$_POST['r54_23']."|".$_POST['r54_24']."|".$_POST['r54_25']."|".$_POST['r54_26']."|".$_POST['r54_27']."|".$_POST['r54_28']."|".$_POST['r54_29']."|".$_POST['r54_30']."' where id_pregunta=54 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 54, '".$_POST['r54_1']."|".$_POST['r54_2']."|".$_POST['r54_3']."|".$_POST['r54_4']."|".$_POST['r54_5']."|".$_POST['r54_6']."|".$_POST['r54_7']."|".$_POST['r54_8']."|".$_POST['r54_9']."|".$_POST['r54_10']."|".$_POST['r54_11']."|".$_POST['r54_12']."|".$_POST['r54_13']."|".$_POST['r54_14']."|".$_POST['r54_15']."|".$_POST['r54_16']."|".$_POST['r54_17']."|".$_POST['r54_18']."|".$_POST['r54_19']."|".$_POST['r54_20']."|".$_POST['r54_21']."|".$_POST['r54_22']."|".$_POST['r54_23']."|".$_POST['r54_24']."|".$_POST['r54_25']."|".$_POST['r54_26']."|".$_POST['r54_27']."|".$_POST['r54_28']."|".$_POST['r54_29']."|".$_POST['r54_30']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r55']){
			
			$consulta4  = "select * from resultados where id_pregunta=55 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r55']."' where id_pregunta=55 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 55, '".$_POST['r55']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
	
}

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
		<section class="sample-text-area">
			<div class="container">
				<h3 class="text-heading">Fin</h3>
				<p class="sample-text">
					Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: Gracias!
				</p>
				<p class="sample-text">
				<button class="float-left primary-btn primary circle d-inline-flex align-items-center mt-10 ml-auto" name="inicio" type="button"  onClick="window.location.href='logout.php';"><span class="mr-10">Terminar</span><span class="lnr lnr-arrow-right"></span></button>
				</p>
			</div>
		</section> 
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