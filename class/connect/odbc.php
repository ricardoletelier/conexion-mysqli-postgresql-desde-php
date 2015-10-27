<?php
	// Esta funci�n incluye y evalua el archivo especificado durante la ejecuci�n del script.
	require_once('ado.php');
	
	// Crear una clase para trabajar con ODBC.
	class odbc extends ado{
	
		// Este m�todo permite crear y abrir una conexi�n con el DSN.
		function db_connect() {
			$this->database = "PostgreSQL30"; // Data Source Name
			$this->user = "mgodoy";
			$this->password = "mgodoy";
			if ($conn = odbc_connect($this->database,$this->user,$this->password)) {
				return $conn;
			}
			else {
				return false;
			}
		}

		// Este m�todo permite cerrar una conexi�n del DSN.
		function db_close($conn) {
			if (odbc_close($conn)) {
				return true;
			}
			else {
				return false;
			}
		}

		// Este m�todo permite ejecutar y abrir una consulta en SQL.
		function query($sql) {
			$this->conn = $this->db_connect() or die ("No fue posible connectar con la base de dados -> "."$this->database");
			if ($res = odbc_exec($this->conn,$sql) or die ("Inv�lida: ".odbc_errormsg())) {
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
			if ($array = odbc_fetch_array($res)) {
				return $array;
			}
			else {
				return false;
			}
		}
		
		// Este m�todo retorna el n�mero de registros (filas) de una consulta ejecutada y cargada.
		function num_rows($res) {
			if ($num = odbc_num_rows($res)) {
				return $num;
			}
			else {
				return false;
			}
		}

		// Este m�todo retorna el n�mero de campos de una consulta ejecutada y cargada.
		function num_fields($res) {
			if ($num = odbc_num_fields($res)) {
				return $num;
			}
			else {
				return false;
			}
		}	
		
		// Este m�todo Libera la memoria del resultado (consulta cargada).
		function free_result($res) {
			if (odbc_free_result ($res)) {
				return true;
			}
			else {
				return false;
			}
		}

		// Este m�todo retorna una fila en forma de objeto, de una consulta ejecutada y cargada.
		function to_object($res) {
			if ($object = odbc_fetch_object($res)) {
				return $object;
			}
			else {
				return false;
			}
		}				
	}
?>