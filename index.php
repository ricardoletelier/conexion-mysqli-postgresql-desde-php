<?php
while ( !file_exists($POSICION."conexion.php" )) {$POSICION .="../";}
include_once($POSICION."header.php");




$res = $db->query("select * from usuario");
while($row = $db->to_object($res)){
	echo($row->nombre."\n");
}




include_once($POSICION."footer.php");
?>