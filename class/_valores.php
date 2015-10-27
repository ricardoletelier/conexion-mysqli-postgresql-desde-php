<?PHP
	// INCLUDE DE LA PÁGINA DE LA CLASE CONNECT
	require_once("class/connect/postgres.php");
	// Crear la instancia del objeto.
	global $Base;
	$Base = new postgres;
	//$Base->host="192.168.1.7";
	$Base->host="192.168.53.1";
	$Base->database="dteconfiguracion";
	$Base->user="desis";
	$Base->password="91098";
	$Base->conn = $Base->db_connect() or die ("No fue posible connectar con la base de dados -> "."$Base->database");


if($uf == 0){
	echo "envía email";
}else{
	$sql = "insert into valoresmonedas(fecha,uf,dolarob,dolaracu,utm,euro)values(now(),$uf,$dolaeobs,0,$utm,$euro)";
	$Base->query($sql) or die($sql);
}

?>
