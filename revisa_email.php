<?php
include "coneccion.php";

$email=$_GET['email'];
 
 
		$consulta  = "select * from usuarios where email='$email'";
		$resultado = mysql_query($consulta) or die("Error 1 $consulta <Br>".  mysql_error() );
	 
		if(@mysql_num_rows($resultado)>0){
			echo "Usuario ya existe";			
		}else{
			echo "Usuario valido";
		}

?>