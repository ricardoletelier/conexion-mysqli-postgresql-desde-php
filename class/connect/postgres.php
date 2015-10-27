<?php
	// Esta función incluye y evalua el archivo especificado durante la ejecución del script.
	require_once('ado.php');
	
	// Crear una clase para trabajar con PostgreSQL.
	class postgres extends ado{
		function imprime_log($mensaje){
			global $sistema;
				@error_log("\n".date("d/m/Y")."-".date("H:i:s")." ".$sistema." ".$_SESSION["ss_user"]."\n".$mensaje."\n",3,"/home/log/Unico_".date("YmdH").".log");
		}
		// Este método permite crear y abrir una conexión con PostgreSQL.
		function db_connect() {
			if ($conn = @pg_connect("host=$this->host dbname=$this->database user=$this->user password=$this->password")) {
				return $conn;
			}
			else {
				return false;
			}
		}

		// Este método permite cerrar una conexión de PostgreSQL.
		function db_close($conn) {
			if (pg_close($conn)) {
				return true;
			}
			else {
				return false;
			}
		}

		// Este método retorna el nombre de la base de datos, según la conexión abierta.
		function db_name($database) {
			if ($db = @pg_DBname($this->conn)) {
				$this->database = $db;			
				return $db;
			}
			else {
				return false;
			}
		}
		
		// Este método permite ejecutar y abrir una consulta en SQL.
		
		function query($sql) {
			//ho "sql=$sql";
			$this->imprime_log($sql);
			if ($res = pg_query($sql)) {
				return $res;
			}
			else {
				return false;
			}
		}

		function pgexec($sql) {
			if ($res = pg_exec($this->conn,$sql)) {
				pg_close($this->conn);
				return $res;
			}
			else {
				//echo "No es posible ejecutar esta consulta: <br>";
				//echo "$sql";				
				return false;
			}
		}

		// Este método retorna un arreglo con los datos de una consulta ejecutada y cargada.
		function to_array($res) {
			if ($array = pg_fetch_array($res)) {
				return $array;
			}
			else {
				return false;
			}
		}
		
		// Este método retorna una fila de resultado como matriz (arreglo), de una consulta ejecutada y cargada.
		function to_row($res) {
			if ($array = pg_fetch_row($res)) {
				return $array;
			}
			else {
				return false;
			}
		}
		
		// Este método retorna el número de registros (filas) de una consulta ejecutada y cargada.
		function num_rows($res) {
			if ($num = pg_num_rows($res)) {
				return $num;
			}
			else {
				return false;
			}
		}

		// Este método retorna el número de campos de una consulta ejecutada y cargada.
		function num_fields($res) {
			if ($num = pg_num_fields($res)) {
				return $num;
			}
			else {
				return false;
			}
		}

		// Este método retorna el número de registros afectados por la ejecución de una consulta.
		function affected_rows($res) {
			if ($num = pg_affected_rows($res)) {
				return $num;
			}
			else {
				return false;
			}
		}
		
		// Este método Libera la memoria del resultado (consulta cargada).
		function free_result($res) {
			if (pg_free_result($res)) {
				return true;
			}
			else {
				return false;
			}
		}

		// Este método retorna una fila en forma de objeto, de una consulta ejecutada y cargada.
		function to_object($res) {
			if ($object = pg_fetch_object($res)) {
				return $object;
			}
			else {
				return false;
			}
		}

		// Este método retorna el nombre del campos de una consulta ejecutada y cargada.
		function field_type($result, $fila) {
			if ($type = pg_field_type($result, $fila)) {
				return $type;
			}
			else {
				return false;
			}
		}

		// Este método retorna el nombre del campos de una consulta ejecutada y cargada.
		function field_name($result, $fila) {
			if ($name = pg_field_name($result, $fila)) {
				return $name;
			}
			else {
				return false;
			}
		}

		function field_size($result, $fila) {
			if ($size = pg_field_size($result, $fila)) {
				return $size;
			}
			else {
				return false;
			}
		}

		function last_oid($result) {
			if ($oid = pg_last_oid($result)) {
				return $oid;
			}
			else {
				return false;
			}
		}
		
		function send_query($conn, $sql) {
			$this->imprime_log($sql);
			return pg_send_query($conn, $sql);		
		}
		
		function get_result($conn) {
			return pg_get_result($conn);			
		}
		
		//Devuelve el error del result
		function result_error($res) {
			return pg_result_error($res);
		}

	}
?>