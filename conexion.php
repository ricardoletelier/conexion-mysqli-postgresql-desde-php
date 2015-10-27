<?php
require_once($POSICION."class/config.php");
require_once($POSICION."class/connect/mysqli.php"); //Cargamos la clase
global $db;
$db = new _mysqli;
$db->host =$db_host;
$db->database =$db_name;
$db->user =$db_user;
$db->password =$db_pwd;
$db->charset = $db_charset;
$db->conn = $db->db_connect() or die("Sistema en Mantención");
?>