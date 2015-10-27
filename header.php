<?php
	//file_exists($POSICION."empresas/".$sistema."/config.php")){
	require_once($POSICION."conexion.php");
 	$sw_header = true; //cuando dibujar las etiquetas para cerrar la pagina
    //if($_SESSION["ss_style"] != "")$SYS_emp_css = $_SESSION["ss_style"];
	
	/*$header_adicional .= '
	 <!-- <script type="text/javascript" src="'.$POSICION.'js/xml_valorflexible.js'.$version.'"></script>
	  <script type="text/javascript" src="'.$POSICION.'js/prototype.js'.$version.'"></script>
	  -->
	';*/
?>
<!DOCTYPE>
<html>
<head>
	<title><?php echo($SYS_title); ?></title>
	<?//=$header_adicional;?>
</head>
<body>
	