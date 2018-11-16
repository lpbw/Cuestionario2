<?
	$enlace = mysql_connect('localhost', 'bluewol5_cuesIni', 'MyCi11!');
	mysql_query ("SET NAMES 'utf8'");
	if (!$enlace) { 
    die('Could not connect: ' . mysql_error()); 
	} 

	mysql_select_db("bluewol5_cuesInicial") or die("No pudo seleccionarse la BD.");
?>