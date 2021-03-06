<?php
	// Esta funci�n incluye y evalua el archivo especificado durante la ejecuci�n del script.
	require_once('ado.php');
	
	// Crear una clase para trabajar con MySql.
	class mysql extends ado {
		// Este m�todo permite crear y abrir una conexi�n con MySql.
		function db_connect() {
			if ($conn = mysql_connect($this->host,$this->user,$this->password)) {
				if ($db = mysql_select_db($this->database,$conn)) {
					return $conn;
				}
			}
			else {
				return false;
			}
		}

		// Este m�todo permite cerrar una conexi�n de MySql.
		function db_close($conn) {
			if (mysql_close($conn)) {
				return true;
			}
			else {
				return false;
			}
		}

		// Este m�todo retorna el nombre de la base de datos, seg�n la conexi�n abierta.
		function db_name($database) {
			if ($db = mysql_select_db($database,$this->conn)) {
				$this->database = $database;
				return $db;
			}
			else {
				return false;
			}
		}

		// Este m�todo permite ejecutar y abrir una consulta en SQL.
		function query($sql) {
			$this->conn = $this->db_connect() or die ("No fue posible connectar con la base de dados -> "."$this->database");
			if ($res = mysql_query($sql,$this->conn) or die ("Inv�lida: ".mysql_error())) {
				$this->db_close($this->conn);
				return $res;
			}
			else {
				echo "No es posible ejecutar esta consulta: <br>";
				echo "$sql";
				$this->db_close($this->conn);			
				return false;
			}
		}

		// Este m�todo retorna un arreglo con los datos de una consulta ejecutada y cargada.
		function to_array($res) {
			if ($array = mysql_fetch_array($res)) {
				return $array;
			}
			else {
				return false;
			}
		}
		
		// Este m�todo retorna una fila de resultado como matriz (arreglo), de una consulta ejecutada y cargada.
		function to_row($res) {
			if ($array = mysql_fetch_row($res)) {
				return $array;
			}
			else {
				return false;
			}
		}
				
		// Este m�todo retorna el n�mero de registros (filas) de una consulta ejecutada y cargada.
		function num_rows($res) {
			if ($num = mysql_num_rows($res)) {
				return $num;
			}
			else {
				return false;
			}
		}
		
		// Este m�todo retorna el n�mero de campos de una consulta ejecutada y cargada.
		function num_fields($res) {
			if ($num = mysql_num_fields($res)) {
				return $num;
			}
			else {
				return false;
			}
		}

		// Este m�todo retorna el n�mero de registros afectados por la ejecuci�n de una consulta.
		function affected_rows($res) {
			if ($num = mysql_affected_rows($res)) {
				return $num;
			}
			else {
				return false;
			}
		}

		// Este m�todo Libera la memoria del resultado (consulta cargada).
		function free_result($res) {
			if (mysql_free_result($res)) {
				return true;
			}
			else {
				return false;
			}
		}

		// Este m�todo retorna una fila en forma de objeto, de una consulta ejecutada y cargada.
		function to_object($res) {
			if ($object = mysql_fetch_object($res)) {
				return $object;
			}
			else {
				return false;
			}
		}		
	}
?>