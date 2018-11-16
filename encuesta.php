<?php
session_start();
include "coneccion.php";
include "checar_sesion.php";

$idU=$_SESSION['idU'];
$nombreU=$_SESSION['nombreU'];

//guardar
if( isset($_POST['siguiente1']) || isset($_POST['anterior']) ){
		
		if($_POST['r1']){
			
			$consulta4  = "select * from resultados where id_pregunta=1 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r1']."' where id_pregunta=1 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 1, '".$_POST['r1']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r2']){
			
			$consulta4  = "select * from resultados where id_pregunta=2 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r2']."' where id_pregunta=2 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 2, '".$_POST['r2']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r3']){
			
			$consulta4  = "select * from resultados where id_pregunta=3 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r3']."' where id_pregunta=3 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 3, '".$_POST['r3']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r4']){
			
			$consulta4  = "select * from resultados where id_pregunta=4 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r4']."' where id_pregunta=4 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 4, '".$_POST['r4']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r5']){
			
			$consulta4  = "select * from resultados where id_pregunta=5 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r5']."' where id_pregunta=5 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 5, '".$_POST['r5']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r6']){
			
			$consulta4  = "select * from resultados where id_pregunta=6 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r6']."' where id_pregunta=6 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 6, '".$_POST['r6']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r7']){
			
			$consulta4  = "select * from resultados where id_pregunta=7 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r7']."' where id_pregunta=7 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 7, '".$_POST['r7']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		//pregunta 8
		$nom= $_POST["nom"];
		$puesto= $_POST["puesto"];
		$count=0;
		if(sizeof($nom)>0){
			foreach($nom as $a){
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 8, '$a|$puesto[$count]')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			$count++;
			}
		}
		//fin pregunta 8
		//archivo
		if($_FILES["r9"]["name"]!=""){	
			$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 9, '')";
			$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			$id_insert=mysql_insert_id();	
			if ($_FILES["r9"]["error"]> 0 )  {
  				//echo "Error imagen: " . $_FILES["file"]["error"] . "<br />";	
  			}else {	  
 	 					 		$allowed_ext = array("jpeg", "jpg", "gif", "png");
	  							$nom="archivos/".$id_insert."_".$_FILES["r9"]["name"];
	 							$nom2="".$id_insert."_".$_FILES["r9"]["name"];
								if(move_uploaded_file($_FILES["r9"]['tmp_name'], $nom)){
								$consulta1  = "update resultados set valor='$nom2' where id=$id_insert";
								$resultado1 = mysql_query($consulta1) or die("Error en operacion: $consulta1" . mysql_error());	
								}else{
									echo"Error uploading archive";
								}	
  				}
			
		}//fin archivo
		
		if($_POST['r10']){
			
			$consulta4  = "select * from resultados where id_pregunta=10 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r10']."' where id_pregunta=10 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 10, '".$_POST['r10']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r11']){
			
			$consulta4  = "select * from resultados where id_pregunta=11 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r11']."' where id_pregunta=11 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 11, '".$_POST['r11']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r12']){
			
			$consulta4  = "select * from resultados where id_pregunta=12 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r12']."' where id_pregunta=12 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 12, '".$_POST['r12']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r13']){
			
			$consulta4  = "select * from resultados where id_pregunta=13 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r13']."' where id_pregunta=13 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 13, '".$_POST['r13']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r14']){
			
			$consulta4  = "select * from resultados where id_pregunta=14 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r14']."' where id_pregunta=14 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 14, '".$_POST['r14']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r15']){
			
			$consulta4  = "select * from resultados where id_pregunta=15 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r15']."' where id_pregunta=15 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 15, '".$_POST['r15']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r16']){
			
			$consulta4  = "select * from resultados where id_pregunta=16 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r16']."' where id_pregunta=16 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 16, '".$_POST['r16']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r17']){
			
			$consulta4  = "select * from resultados where id_pregunta=17 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r17']."|".$_POST['r17_1']."' where id_pregunta=17 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 17, '".$_POST['r17']."|".$_POST['r17_1']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r18']){
			
			$consulta4  = "select * from resultados where id_pregunta=18 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r18']."' where id_pregunta=18 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 18, '".$_POST['r18']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r19']){
			
			$consulta4  = "select * from resultados where id_pregunta=19 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r19']."' where id_pregunta=19 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 19, '".$_POST['r19']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r20']){
			
			$consulta4  = "select * from resultados where id_pregunta=20 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r20']."' where id_pregunta=20 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 20, '".$_POST['r20']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r21_1'] || $_POST['r21_2'] || $_POST['r21_3'] || $_POST['r21_4'] || $_POST['r21_5'] || $_POST['r21_6']){
			
			$consulta4  = "select * from resultados where id_pregunta=21 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r21_1']."|".$_POST['r21_2']."|".$_POST['r21_3']."|".$_POST['r21_4']."|".$_POST['r21_5']."|".$_POST['r21_6']."' where id_pregunta=21 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 21, '".$_POST['r21_1']."|".$_POST['r21_2']."|".$_POST['r21_3']."|".$_POST['r21_4']."|".$_POST['r21_5']."|".$_POST['r21_6']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r22']){
			
			$consulta4  = "select * from resultados where id_pregunta=22 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r22']."' where id_pregunta=22 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 22, '".$_POST['r22']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r23']){
			
			$consulta4  = "select * from resultados where id_pregunta=23 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r23']."' where id_pregunta=23 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 23, '".$_POST['r23']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r24']){
			
			$consulta4  = "select * from resultados where id_pregunta=24 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r24']."' where id_pregunta=24 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 24, '".$_POST['r24']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r25']){
			
			$consulta4  = "select * from resultados where id_pregunta=25 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r25']."' where id_pregunta=25 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 25, '".$_POST['r25']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r26']){
			
			$consulta4  = "select * from resultados where id_pregunta=26 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r26']."' where id_pregunta=26 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 26, '".$_POST['r26']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r27']){
			
			$consulta4  = "select * from resultados where id_pregunta=27 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r27']."' where id_pregunta=27 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 27, '".$_POST['r27']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r28']){
			
			$consulta4  = "select * from resultados where id_pregunta=28 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r28']."' where id_pregunta=28 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 28, '".$_POST['r28']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r29']){
			
			$consulta4  = "select * from resultados where id_pregunta=29 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r29']."' where id_pregunta=29 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 29, '".$_POST['r29']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r30']){
			
			$consulta4  = "select * from resultados where id_pregunta=30 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r30']."' where id_pregunta=30 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 30, '".$_POST['r30']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r31']){
			
			$consulta4  = "select * from resultados where id_pregunta=31 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r31']."' where id_pregunta=31 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 31, '".$_POST['r31']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r32']){
			
			$consulta4  = "select * from resultados where id_pregunta=32 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r32']."' where id_pregunta=32 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 32, '".$_POST['r32']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r33']){
			
			$consulta4  = "select * from resultados where id_pregunta=33 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r33']."' where id_pregunta=33 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 33, '".$_POST['r33']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r34']){
			
			$consulta4  = "select * from resultados where id_pregunta=34 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r34']."' where id_pregunta=34 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 34, '".$_POST['r34']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r35']){
			
			$consulta4  = "select * from resultados where id_pregunta=35 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r35']."' where id_pregunta=35 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 35, '".$_POST['r35']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r36']){
			
			$consulta4  = "select * from resultados where id_pregunta=36 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r36']."' where id_pregunta=36 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 36, '".$_POST['r36']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r37']){
			
			$consulta4  = "select * from resultados where id_pregunta=37 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r37']."' where id_pregunta=37 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 37, '".$_POST['r37']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r38']){
			
			$consulta4  = "select * from resultados where id_pregunta=38 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r38']."|".$_POST['r38_1']."|".$_POST['r38_2']."' where id_pregunta=38 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 38, '".$_POST['r38']."|".$_POST['r38_1']."|".$_POST['r38_2']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r39_1'] || $_POST['r39_2'] || $_POST['r39_3'] || $_POST['r39_4'] || $_POST['r39_5']){
			
			$consulta4  = "select * from resultados where id_pregunta=39 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r39_1']."|".$_POST['r39_2']."|".$_POST['r39_3']."|".$_POST['r39_4']."|".$_POST['r39_5']."' where id_pregunta=39 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 39, '".$_POST['r39_1']."|".$_POST['r39_2']."|".$_POST['r39_3']."|".$_POST['r39_4']."|".$_POST['r39_5']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
		if($_POST['r40_1'] || $_POST['r40_2'] || $_POST['r40_3'] || $_POST['r40_4'] || $_POST['r40_5'] || $_POST['r40_6'] || $_POST['r40_7'] || $_POST['r40_8'] || $_POST['r40_9'] || $_POST['r40_10'] || $_POST['r40_11'] || $_POST['r40_12'] || $_POST['r40_13'] || $_POST['r40_14'] || $_POST['r40_15'] || $_POST['r40_16'] || $_POST['r40_17'] || $_POST['r40_18']){
			
			$consulta4  = "select * from resultados where id_pregunta=40 and id_usuario=$idU";
    		$resultado4= mysql_query($consulta4) or print("La consulta $consulta4: " . mysql_error());
    		if(@mysql_num_rows($resultado4)>0){
				$listGStr= "update resultados set valor='".$_POST['r40_1']."|".$_POST['r40_2']."|".$_POST['r40_3']."|".$_POST['r40_4']."|".$_POST['r40_5']."|".$_POST['r40_6']."|".$_POST['r40_7']."|".$_POST['r40_8']."|".$_POST['r40_9']."|".$_POST['r40_10']."|".$_POST['r40_11']."|".$_POST['r40_12']."|".$_POST['r40_13']."|".$_POST['r40_14']."|".$_POST['r40_15']."|".$_POST['r40_16']."|".$_POST['r40_17']."|".$_POST['r40_18']."' where id_pregunta=40 and id_usuario=$idU";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}else{
				$listGStr= "insert into resultados (id_usuario, id_pregunta, valor)values($idU, 40, '".$_POST['r40_1']."|".$_POST['r40_2']."|".$_POST['r40_3']."|".$_POST['r40_4']."|".$_POST['r40_5']."|".$_POST['r40_6']."|".$_POST['r40_7']."|".$_POST['r40_8']."|".$_POST['r40_9']."|".$_POST['r40_10']."|".$_POST['r40_11']."|".$_POST['r40_12']."|".$_POST['r40_13']."|".$_POST['r40_14']."|".$_POST['r40_15']."|".$_POST['r40_16']."|".$_POST['r40_17']."|".$_POST['r40_18']."')";	
				$resGStr= mysql_query($listGStr)or die("La consulta fall&oacute;P1: $listGStr ". mysql_error() );
			}
		}
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
//fin guardar

$siguiente=$_POST['siguiente'];
$inicial=$siguiente;
$n_sql="i";
$contador_comp=0;
$contador_evaluados=0;

		$consulta = "SELECT * from areas where deleted is null order by id";
		$co=0;
		$resultado = mysql_query($consulta) or die("La consulta fall&oacute;P13:$consulta ". mysql_error() );//. mysql_error()	
		while(@mysql_num_rows($resultado)>$co)
		{
			$res=mysql_fetch_row($resultado);
			$total=mysql_num_rows($resultado);
			$areas[$co]= $res[0];
			$areas_nombre[$co]= $res[1];
			$co++;	
		}
			for($o=$inicial ;$o<$contador_comp; $o++){
				if($inicial!=$siguiente){
					$siguiente=$siguiente+1;
				}
				$consulta  = "select * from preguntas where deleted is null and id_area=$areas[$siguiente] order by id";
				$resultado = mysql_query($consulta) or die("La consulta fall&oacute;P1:$consulta ". mysql_error() );//. mysql_error()	
				if(@mysql_num_rows($resultado)>=1){
					$res=mysql_fetch_row($resultado);
					$contador_evaluados++;
					$o=$contador_comp;
				}
			}


			$consulta89  = "SELECT count(*) as tot FROM resultados where id_usuario=$idU group by id_pregunta";
    		$resultado89= mysql_query($consulta89) or print("La consulta $consulta89: " . mysql_error());
    		$res89=mysql_num_rows($resultado89);
			
			$tot=round(($res89 / 55)*100);
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
	<script>

function deleteRow(r)
{

var i=r.rowIndex;
document.getElementById('myTable').deleteRow(i);
	
}
	function ir(area){
		 document.form1.siguiente.value=area-1;
		 document.form1.submit();
	}
function insRow(){

var nom=document.form1.nom.value;
var puesto=document.form1.puesto.value;
var num=document.form1.num.value;
if(nom!="" && puesto!="" && num!=""){

var x=document.getElementById('myTable').insertRow(0);
var y=x.insertCell(0);
var z=x.insertCell(1);
var z1=x.insertCell(2);
 

x.id="p"+num;
y.innerHTML="<center>"+nom+"</center>";
z.innerHTML="<center>"+puesto+"</center>";
z1.innerHTML="<input name=\"nom[]\"  type=\"hidden\" value=\""+nom+"\" /><input name=\"puesto[]\"  type=\"hidden\" value=\""+puesto+"\" /><center><img src=\"img/b_borrar.png\" alt=\"Eliminar\" name=\"Image50\"  border=\"0\"  id=\"Image50\" onclick=\"deleteRow(p"+num+")\"/></center>";

document.form1.nom.value="";
document.form1.puesto.value="";
document.form1.num.value=num+1;
}
}
 function borrar(id){

    if(confirm('Do you want to delete this Archive?')){
  
    var element = document.createElement('input');
    element.name = 'eliminar2';
    element.value = id;
    document.form1.appendChild(element);
    document.form1.submit();

    }
 }
 
 function mostrar(id) { 
  	if(id==1){
    document.form1.r17_1.style.visibility='visible'; 
   }else{
   	document.form1.r17_1.style.visibility='hidden'; 
   }
} 

 function mostrar2(id) { 
  	if(id==1){
    
	var input = document.getElementById ("r38_1");;
	input.placeholder = "¿En dónde?";
	
	var input2 = document.getElementById ("r38_2");;
	input2.placeholder = "¿Principales retos que ha enfrentado?";
	
   }if(id==0){
   	var input = document.getElementById ("r38_1");;
	input.placeholder = "¿Por qué no?";
	
	var input2 = document.getElementById ("r38_2");;
	input2.placeholder = "¿Se ha analizado la posibilidad?";
   }
}

function mostrar3(id) { 
  	if(id==1){
    document.form1.r49_1.style.visibility='visible'; 
	document.form1.r49_2.style.visibility='visible'; 
   }else{
   	document.form1.r49_1.style.visibility='hidden'; 
	document.form1.r49_2.style.visibility='hidden'; 
   }
} 
	</script>
	<body>
	<form class="form-horizontal form-material" name="form1" method="post" action="encuesta.php" enctype="multipart/form-data">
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
					<h3 class="mb-30">Cuestionario Inicial <span class="text-primary"><? echo $tot?>%</span> <input name="siguiente" type="hidden" id="siguiente" value="<? echo $siguiente?>" /></h3>
					<?
							$consulta2  = "SELECT * from areas where deleted is null order by id";
							$resultado2 = mysql_query($consulta2) or die("Error 1 $consulta2 <Br>".  mysql_error() );
							while($res2=mysql_fetch_assoc($resultado2)){
						?>
                             <? if($res2['id']==$areas[$siguiente]){?><b><? echo $res2['nombre']?></b>&ensp;<? }else{?><a href="javascript:ir(<? echo $res2['id']?>);"><? echo $res2['nombre']?></a>&ensp;<? }?> 
                        <? }?>  
						<p>&nbsp;</p>
					<div class="row">
					<?
						$consulta3  = "SELECT * from preguntas where deleted is null and id_area=$areas[$siguiente] order by id";
						$resultado3 = mysql_query($consulta3) or die("Error 1 $consulta3 <Br>".  mysql_error() );
						while($res3=mysql_fetch_assoc($resultado3)){
					?>
						<div class="col-lg-12">
							<blockquote class="generic-blockquote">
							<h4 class="card-title"><? echo $res3['nombre']?></h4>
								<?
											$consulta5  = "SELECT * from resultados where id_pregunta={$res3['id']} and id_usuario=$idU";
											$resultado5 = mysql_query($consulta5) or die("Error 1 $consulta5 <Br>".  mysql_error() );
											$res5=mysql_fetch_assoc($resultado5);
											
											/*$consulta4  = "SELECT * from respuestas where id_pregunta={$res3['id']} order by id";
											$resultado4 = mysql_query($consulta4) or die("Error 1 $consulta4 <Br>".  mysql_error() );
											$res4=mysql_fetch_assoc($resultado4);
											echo $res4['nombre'];*/
											if($res3['id']==1 || $res3['id']==2 || $res3['id']==7){
											?>
                                            <input type="text" class="form-control" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" value="<? echo $res5['valor']?>">
											
											<? } if($res3['id']==3 || $res3['id']==4 || $res3['id']==5 || $res3['id']==6 || $res3['id']==13 || $res3['id']==15 || $res3['id']==16 || $res3['id']==22 || $res3['id']==23 || $res3['id']==24 || $res3['id']==27 || $res3['id']==28 || $res3['id']==29 || $res3['id']==30 || $res3['id']==31 || $res3['id']==35 || $res3['id']==36 || $res3['id']==44 || $res3['id']==47 || $res3['id']==48 || $res3['id']==52 || $res3['id']==53 || $res3['id']==55){?>
											<textarea class="form-control" rows="5" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>"><? echo $res5['valor']?></textarea>
											<? } if($res3['id']==8){?>
											<div class="table-responsive">
											<table class="table">
                                        		<tbody>
                                            		<tr>
                                                		<td><input type="text" class="form-control form-control-line" name="nom" id="nom" placeholder="Nombre"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="puesto" id="puesto" placeholder="Puesto"></td>
														<td><input type="button" name="agregar" id="agregar" value="Agregar" onClick="insRow()" class="genric-btn info-border circle"></td>
                                            		</tr>
												</tbody>
                                    		</table>
                               				</div>
											<div class="table-responsive">
											<table class="table" >
                                        		<thead>
                                            		<tr>
                                                		<td width="33%" align="center" class="text-heading">Nombre</td>
                                                		<td width="34%" align="center" class="text-heading">Puesto</td>
														<td width="33%" align="center" class="text-heading">Eliminar <input type="hidden" name="num" value="1"></td>
                                           	 		</tr>
												</thead>
                                    		</table>
											</div>
											<div class="table-responsive">
											<table class="table" id="myTable">
												<tr>
                                                		<td width="33%" align="center"></td>
                                                		<td width="34%" align="center"></td>
														<td width="33%" align="center"></td>
                                            		</tr>
                                    		</table>
											<table class="table">
                                        		<tbody>
												<?
												$consulta98="select * from resultados where id_pregunta=8 and id_usuario=$idU";
												$resultado98 = mysql_query($consulta98) or die("Error en operacion1:$consulta98 " . mysql_error());
												while($res98=mysql_fetch_assoc($resultado98)){
												$r8=explode("|", $res98['valor']);
												?>
                                            		<tr>
                                                		<td width="33%" align="center"><? echo $r8[0]?></td>
                                                		<td width="34%" align="center"><? echo $r8[1]?></td>
														<td width="33%" align="center"><a href="javascript:borrar(<?php echo $res98['id']; ?>);" ><img src="img/b_borrar.png" border="0" title="Eliminar" /></a></td>
                                            		</tr>
												<? }?>
												</tbody>
                                    		</table>
                               				</div>
											<? } if($res3['id']==9 || $res3['id']==45){?>
											<? if($res5['valor']==""){?><input type="file" class="form-control" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>"><? }?>
											<? if($res5['valor']!=""){?><a href="archivos/<? echo $res5['valor']?>" target="_blank"><? echo $res5['valor']?></a><? }?>
											<? } if($res3['id']==10){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Complicado / Difícil" <? if($res5['valor']=="Complicado / Difícil"){echo "checked";}?>> Complicado / Difícil<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Normal/Promedio" <? if($res5['valor']=="Normal/Promedio"){echo "checked";}?>> Normal/Promedio<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Fácil" <? if($res5['valor']=="Muy Fácil"){echo "checked";}?>> Muy Fácil
											<? } if($res3['id']==11){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Complicado / Difícil" <? if($res5['valor']=="Complicado / Difícil"){echo "checked";}?>> Complicado / Difícil<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Normal/Promedio" <? if($res5['valor']=="Normal/Promedio"){echo "checked";}?>> Normal/Promedio<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Fácil" <? if($res5['valor']=="Muy Fácil"){echo "checked";}?>> Muy Fácil
											<? } if($res3['id']==12){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Complicado / Difícil" <? if($res5['valor']=="Complicado / Difícil"){echo "checked";}?>> Complicado / Difícil<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Normal/Promedio" <? if($res5['valor']=="Normal/Promedio"){echo "checked";}?>> Normal/Promedio<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Fácil" <? if($res5['valor']=="Muy Fácil"){echo "checked";}?>> Muy Fácil
											<? } if($res3['id']==14){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Malo" <? if($res5['valor']=="Muy Malo"){echo "checked";}?>> Muy Malo<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Malo" <? if($res5['valor']=="Malo"){echo "checked";}?>> Malo<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Regular" <? if($res5['valor']=="Regular"){echo "checked";}?>> Regular<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Bueno" <? if($res5['valor']=="Bueno"){echo "checked";}?>> Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Bueno" <? if($res5['valor']=="Muy Bueno"){echo "checked";}?>> Muy Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No tenemos idea" <? if($res5['valor']=="No tenemos idea"){echo "checked";}?>> No tenemos idea
											<? }if($res3['id']==17){
											$r17=explode("|", $res5['valor']);
											?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Si" <? if($r17[0]=="Si"){echo "checked";}?> onClick="mostrar(1)"> Si.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No" <? if($r17[0]=="No"){echo "checked";}?> onClick="mostrar(0)"> No
											<br/><input type="text" name="r17_1" class="form-control" <? if($r17[0]=="Si"){echo "style=\"visibility:visible\"";}?> style="visibility:hidden"  placeholder="Proporcione detalles" value="<? echo $r17[1]?>" />
											<? }if($res3['id']==18){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Malo" <? if($res5['valor']=="Muy Malo"){echo "checked";}?>> Muy Malo<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Malo" <? if($res5['valor']=="Malo"){echo "checked";}?>> Malo<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Regular" <? if($res5['valor']=="Regular"){echo "checked";}?>> Regular<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Bueno" <? if($res5['valor']=="Bueno"){echo "checked";}?>> Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Bueno" <? if($res5['valor']=="Muy Bueno"){echo "checked";}?>> Muy Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No tenemos idea" <? if($res5['valor']=="No tenemos idea"){echo "checked";}?>> No tenemos idea
											<? }if($res3['id']==19){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Incompleta / Insuficiente" <? if($res5['valor']=="Incompleta / Insuficiente"){echo "checked";}?>> Incompleta / Insuficiente<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Adecuada" <? if($res5['valor']=="Adecuada"){echo "checked";}?>> Adecuada<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Buena / Superior" <? if($res5['valor']=="Buena / Superior"){echo "checked";}?>> Buena / Superior<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Excesiva" <? if($res5['valor']=="Excesiva"){echo "checked";}?>> Excesiva
											<? }if($res3['id']==20){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Malo" <? if($res5['valor']=="Muy Malo"){echo "checked";}?>> Muy Malo<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Malo" <? if($res5['valor']=="Malo"){echo "checked";}?>> Malo<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Regular" <? if($res5['valor']=="Regular"){echo "checked";}?>> Regular<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Bueno" <? if($res5['valor']=="Bueno"){echo "checked";}?>> Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Muy Bueno" <? if($res5['valor']=="Muy Bueno"){echo "checked";}?>> Muy Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No tenemos idea" <? if($res5['valor']=="No tenemos idea"){echo "checked";}?>> No tenemos idea
											<? }if($res3['id']==21){
											$r21=explode("|", $res5['valor']);
											?>
											Administración (Contabilidad,Finanzas, etc.)
										<textarea class="form-control" rows="3" name="r<? echo $res3['id']?>_1" id="r<? echo $res3['id']?>_1"><? echo $r21[0]?></textarea>
											<br/>
											Capital Humano (Reclutamiento, Expedientes, Capacitación, Desempeño, etc.)
										<textarea class="form-control" rows="3" name="r<? echo $res3['id']?>_2" id="r<? echo $res3['id']?>_2"><? echo $r21[1]?></textarea>
											<br/>
											Operaciones (Compras, Inventarios, Producción, Calidad, Punto de Venta, etc.)
										<textarea class="form-control" rows="3" name="r<? echo $res3['id']?>_3" id="r<? echo $res3['id']?>_3"><? echo $r21[2]?></textarea>
											<br/>
											Clientes (Fuerza de Ventas, CRM, etc.)
										<textarea class="form-control" rows="3" name="r<? echo $res3['id']?>_4" id="r<? echo $res3['id']?>_4"><? echo $r21[3]?></textarea>
											<br/>
											Aplicaciones móviles
										<textarea class="form-control" rows="3" name="r<? echo $res3['id']?>_5" id="r<? echo $res3['id']?>_5"><? echo $r21[4]?></textarea>
											<br/>
											¿Otros software importantes en la empresa?
										<textarea class="form-control" rows="3" name="r<? echo $res3['id']?>_6" id="r<? echo $res3['id']?>_6"><? echo $r21[5]?></textarea>
											
											<? }if($res3['id']==25){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Insuficiente" <? if($res5['valor']=="Insuficiente"){echo "checked";}?>> Insuficiente<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Adecuado" <? if($res5['valor']=="Adecuado"){echo "checked";}?>> Adecuado<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Sobresaliente" <? if($res5['valor']=="Sobresaliente"){echo "checked";}?>> Sobresaliente
											
											<? }if($res3['id']==26){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Rezagada" <? if($res5['valor']=="Rezagada"){echo "checked";}?>> Rezagada<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Promedio" <? if($res5['valor']=="Promedio"){echo "checked";}?>> Promedio<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Avanzada" <? if($res5['valor']=="Avanzada"){echo "checked";}?>> Avanzada
											<? }if($res3['id']==32){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Insuficiente" <? if($res5['valor']=="Insuficiente"){echo "checked";}?>> Insuficiente<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Adecuada" <? if($res5['valor']=="Adecuada"){echo "checked";}?>> Adecuada<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Sobresaliente" <? if($res5['valor']=="Sobresaliente"){echo "checked";}?>> Sobresaliente
											
											<? }if($res3['id']==33){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Sí, con claridad." <? if($res5['valor']=="Sí, con claridad."){echo "checked";}?>> Sí, con claridad.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Tenemos alguna idea." <? if($res5['valor']=="Tenemos alguna idea."){echo "checked";}?>> Tenemos alguna idea.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No tenemos idea." <? if($res5['valor']=="No tenemos idea."){echo "checked";}?>> No tenemos idea.
											<? } if($res3['id']==34){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Sí, con claridad." <? if($res5['valor']=="Sí, con claridad."){echo "checked";}?>> Sí, con claridad.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Tenemos alguna idea." <? if($res5['valor']=="Tenemos alguna idea."){echo "checked";}?>> Tenemos alguna idea.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No tenemos idea." <? if($res5['valor']=="No tenemos idea."){echo "checked";}?>> No tenemos idea.
											
											<? } if($res3['id']==37){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Si" <? if($res5['valor']=="Si"){echo "checked";}?>> Si.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No" <? if($res5['valor']=="No"){echo "checked";}?>> No
											<? } if($res3['id']==38){
											$r38=explode("|", $res5['valor']);
											?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Si" <? if($r38[0]=="Si"){echo "checked";}?> onClick="mostrar2(1)"> Si.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No" <? if($r38[0]=="No"){echo "checked";}?> onClick="mostrar2(0)"> No
											
											<input type="text" name="r38_1" id="r38_1" class="form-control" value="<? echo $r38[1]?>"  />
											<input type="text" name="r38_2" id="r38_2" class="form-control" value="<? echo $r38[2]?>"  />
											<? } if($res3['id']==39){
											$r39=explode("|", $res5['valor']);
											?>
											<div class="table-responsive">
											<table class="table">
                                       			<thead>
                                            		<tr>
                                                		<td align="center" class="text-heading">2013</td>
                                                		<td align="center" class="text-heading">2014</td>
                                                		<td align="center" class="text-heading">2015</td>
                                                		<td align="center" class="text-heading">2016</td>
														<td align="center" class="text-heading">2017</td>
                                           	 		</tr>
												</thead>
                                        		<tbody>
                                            		<tr>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_1" id="r<? echo $res3['id']?>_1" value="<? echo $r39[0]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_2" id="r<? echo $res3['id']?>_2" value="<? echo $r39[1]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_3" id="r<? echo $res3['id']?>_3" value="<? echo $r39[2]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_4" id="r<? echo $res3['id']?>_4" value="<? echo $r39[3]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_5" id="r<? echo $res3['id']?>_5" value="<? echo $r39[4]?>"></td>
                                            		</tr>
												</tbody>
                                    		</table>
                               				</div>
											
											<? }if($res3['id']==40){
											$r40=explode("|", $res5['valor']);
											?>
											<div class="table-responsive">
											<table class="table">
                                       			<thead>
                                            		<tr>
														<td>&nbsp;</td>
                                                		<td align="center" class="text-heading">2015</td>
                                                		<td align="center" class="text-heading">2016</td>
														<td align="center" class="text-heading">2017</td>
                                           	 		</tr>
												</thead>
                                        		<tbody>
                                            		<tr>
														<td>Liquidez (Activo Circulante / Pasivo Circulante)</td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_1" id="r<? echo $res3['id']?>_1" value="<? echo $r40[0]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_2" id="r<? echo $res3['id']?>_2" value="<? echo $r40[1]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_3" id="r<? echo $res3['id']?>_3" value="<? echo $r40[2]?>"></td>
                                            		</tr>
													<tr>
														<td>Capital de Trabajo (Activo Circulante - Pasivo Circulante)</td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_4" id="r<? echo $res3['id']?>_4" value="<? echo $r40[3]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_5" id="r<? echo $res3['id']?>_5" value="<? echo $r40[4]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_6" id="r<? echo $res3['id']?>_6" value="<? echo $r40[5]?>"></td>
                                            		</tr>
													<tr>
														<td>Utilidad de Operación</td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_7" id="r<? echo $res3['id']?>_7" value="<? echo $r40[6]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_8" id="r<? echo $res3['id']?>_8" value="<? echo $r40[7]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_9" id="r<? echo $res3['id']?>_9" value="<? echo $r40[8]?>"></td>
                                            		</tr>
													<tr>
														<td>Utilidad Neta</td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_10" id="r<? echo $res3['id']?>_10" value="<? echo $r40[9]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_11" id="r<? echo $res3['id']?>_11" value="<? echo $r40[10]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_12" id="r<? echo $res3['id']?>_12" value="<? echo $r40[11]?>"></td>
                                            		</tr>
													<tr>
														<td>Rendimiento sobre el Capital (Utilidad Neta / Capital Contable)</td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_13" id="r<? echo $res3['id']?>_13" value="<? echo $r40[12]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_14" id="r<? echo $res3['id']?>_14" value="<? echo $r40[13]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_15" id="r<? echo $res3['id']?>_15" value="<? echo $r40[14]?>"></td>
                                            		</tr>
													<tr>
														<td>Apalancamiento Financiero (Pasivo Total / Capital Contable)</td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_16" id="r<? echo $res3['id']?>_16" value="<? echo $r40[15]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_17" id="r<? echo $res3['id']?>_17" value="<? echo $r40[16]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_18" id="r<? echo $res3['id']?>_18" value="<? echo $r40[17]?>"></td>
                                            		</tr>
													
													
												</tbody>
                                    		</table>
                               				</div>
											
											<? }if($res3['id']==41){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Claramente definida (solo hace falta actualizar)." <? if($res5['valor']=="Claramente definida (solo hace falta actualizar)."){echo "checked";}?>> Claramente definida (solo hace falta actualizar).<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Parcialmente definida." <? if($res5['valor']=="Parcialmente definida."){echo "checked";}?>> Parcialmente definida.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No está clara / No existe" <? if($res5['valor']=="No está clara / No existe"){echo "checked";}?>> No está clara / No existe
											
											<? }if($res3['id']==42){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Consistentemente en los últimos años." <? if($res5['valor']=="Consistentemente en los últimos años."){echo "checked";}?>> Consistentemente en los últimos años.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Esporádicamente" <? if($res5['valor']=="Esporádicamente"){echo "checked";}?>> Esporádicamente<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Nunca se ha realizado" <? if($res5['valor']=="Nunca se ha realizado"){echo "checked";}?>> Nunca se ha realizado
											
											<? }if($res3['id']==43){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Buenos" <? if($res5['valor']=="Buenos"){echo "checked";}?>> Buenos<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Regulares" <? if($res5['valor']=="Regulares"){echo "checked";}?>> Regulares<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Malos" <? if($res5['valor']=="Malos"){echo "checked";}?>> Malos
											<? }if($res3['id']==46){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Bueno" <? if($res5['valor']=="Bueno"){echo "checked";}?>> Bueno<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Regular" <? if($res5['valor']=="Regular"){echo "checked";}?>> Regular<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Malo" <? if($res5['valor']=="Malo"){echo "checked";}?>> Malo
											<? } if($res3['id']==49){
											$r49=explode("|", $res5['valor']);
											?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Si" <? if($r49[0]=="Si"){echo "checked";}?> onClick="mostrar3(1)"> Si.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No" <? if($r49[0]=="No"){echo "checked";}?> onClick="mostrar3(0)"> No
											<br/><input type="text" name="r49_1" class="form-control" <? if($r49[0]=="Si"){echo "style=\"visibility:visible\"";}?> style="visibility:hidden"  placeholder="¿Cuales?" value="<? echo $r49[1]?>" />
											<input type="text" name="r49_2" class="form-control" <? if($r49[0]=="Si"){echo "style=\"visibility:visible\"";}?> style="visibility:hidden"  placeholder="¿Para que les son útiles?" value="<? echo $r49[2]?>" />
											<? }if($res3['id']==50){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Insuficiente" <? if($res5['valor']=="Insuficiente"){echo "checked";}?>> Insuficiente<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Adecuado" <? if($res5['valor']=="Adecuado"){echo "checked";}?>> Adecuado<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Sobresaliente" <? if($res5['valor']=="Sobresaliente"){echo "checked";}?>> Sobresaliente
											<? }if($res3['id']==51){?>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Si, de manera sistemática y con procesos maduros." <? if($res5['valor']=="Si, de manera sistemática y con procesos maduros."){echo "checked";}?>> Si, de manera sistemática y con procesos maduros.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="Esporádicamente y de forma parcial." <? if($res5['valor']=="Esporádicamente y de forma parcial."){echo "checked";}?>> Esporádicamente y de forma parcial.<br/>
											<input type="radio" name="r<? echo $res3['id']?>" id="r<? echo $res3['id']?>" class="confirm-radio" value="No, en lo absoluto." <? if($res5['valor']=="No, en lo absoluto."){echo "checked";}?>> No, en lo absoluto.
											<? }if($res3['id']==54){
											$r54=explode("|", $res5['valor']);
											?>
											<div class="table-responsive">
											<table class="table">
                                       			<thead>
                                            		<tr>
														<td align="center" class="text-heading">Indicador</td>
                                                		<td align="center" class="text-heading">2013</td>
                                                		<td align="center" class="text-heading">2014</td>
                                                		<td align="center" class="text-heading">2015</td>
                                                		<td align="center" class="text-heading">2016</td>
														<td align="center" class="text-heading">2017</td>
                                           	 		</tr>
												</thead>
                                        		<tbody>
                                            		<tr>
														
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_1" id="r<? echo $res3['id']?>_1" value="<? echo $r54[0]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_2" id="r<? echo $res3['id']?>_2" value="<? echo $r54[1]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_3" id="r<? echo $res3['id']?>_3" value="<? echo $r54[2]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_4" id="r<? echo $res3['id']?>_4" value="<? echo $r54[3]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_5" id="r<? echo $res3['id']?>_5" value="<? echo $r54[4]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_6" id="r<? echo $res3['id']?>_6" value="<? echo $r54[5]?>"></td>
                                            		</tr>
													<tr>
														
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_7" id="r<? echo $res3['id']?>_7" value="<? echo $r54[6]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_8" id="r<? echo $res3['id']?>_8" value="<? echo $r54[7]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_9" id="r<? echo $res3['id']?>_9" value="<? echo $r54[8]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_10" id="r<? echo $res3['id']?>_10" value="<? echo $r54[9]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_11" id="r<? echo $res3['id']?>_11" value="<? echo $r54[10]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_12" id="r<? echo $res3['id']?>_12" value="<? echo $r54[11]?>"></td>
                                            		</tr>
													<tr>
														
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_13" id="r<? echo $res3['id']?>_13" value="<? echo $r54[12]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_14" id="r<? echo $res3['id']?>_14" value="<? echo $r54[13]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_15" id="r<? echo $res3['id']?>_15" value="<? echo $r54[14]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_16" id="r<? echo $res3['id']?>_16" value="<? echo $r54[15]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_17" id="r<? echo $res3['id']?>_17" value="<? echo $r54[16]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_18" id="r<? echo $res3['id']?>_18" value="<? echo $r54[17]?>"></td>
                                            		</tr>
													<tr>
														
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_19" id="r<? echo $res3['id']?>_19" value="<? echo $r54[18]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_20" id="r<? echo $res3['id']?>_20" value="<? echo $r54[19]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_21" id="r<? echo $res3['id']?>_21" value="<? echo $r54[20]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_22" id="r<? echo $res3['id']?>_22" value="<? echo $r54[21]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_23" id="r<? echo $res3['id']?>_23" value="<? echo $r54[22]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_24" id="r<? echo $res3['id']?>_24" value="<? echo $r54[23]?>"></td>
                                            		</tr>
													<tr>
														
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_25" id="r<? echo $res3['id']?>_25" value="<? echo $r54[24]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_26" id="r<? echo $res3['id']?>_26" value="<? echo $r54[25]?>"></td>
                                               			<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_27" id="r<? echo $res3['id']?>_27" value="<? echo $r54[26]?>"></td>
                                                		<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_28" id="r<? echo $res3['id']?>_28" value="<? echo $r54[27]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_29" id="r<? echo $res3['id']?>_29" value="<? echo $r54[28]?>"></td>
														<td><input type="text" class="form-control form-control-line" name="r<? echo $res3['id']?>_30" id="r<? echo $res3['id']?>_30" value="<? echo $r54[29]?>"></td>
                                            		</tr>
												</tbody>
                                    		</table>
                               				</div>
											<? }?>
							</blockquote>
						</div>
					<? }?>
					</div>
					 
							<div class="banner-content text-center">
					<? if($siguiente!=0){?>
                       
							<button name="anterior" class="float-left genric-btn primary" type="submit" onClick="document.form1.siguiente.value='<? echo $siguiente-1;?>';">Anterior</button>
						 
					<? } if($siguiente!=$co-1){?>
					 
						<button name="siguiente1" class="float-right genric-btn primary" type="submit" onClick="document.form1.siguiente.value='<? echo $siguiente+1;?>';">Siguiente</button>
					 
				 	<? } if($siguiente==$co-1){?>
					  
							<button name="siguiente2" class="float-right genric-btn primary" type="submit" onClick="document.form1.action='fin.php';">Siguiente</button>
						 
					<? }?>
						</div>
			</div>
		 </section>
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
<?
if( isset($_POST['eliminar2'])){

	$query = "delete from resultados WHERE id = {$_POST['eliminar2']}";
    $result = mysql_query($query) or print("<script>alert('Error al eliminar $query');</script>");
	echo"<script>ir(2);</script>";
}
?>
</form>
</body>
</html>