<?php
require_once('ado.php');
class _mysqli extends ado {

	// Este método permite crear y abrir una conexión con MySql.
	public function db_connect() {
       	if ($conn = mysqli_connect($this->host,$this->user,$this->password,$this->port)) {
			if ($db = mysqli_select_db($conn,$this->database)) {
				if (!$conn->set_charset($this->charset)) {
					printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
					exit();
				}
				return $conn;
			}
		}else {
			return false;
		}
    }
    
    // Este método permite cerrar una conexión de MySql.
	function db_close() {
		if (mysqli_close($this->conn)) {
			return true;
		}
		else {
			return false;
		}
	}
    
	// Este método retorna el nombre de la base de datos, según la conexión abierta.
	function db_name() {
		if ($result = mysqli_query($this->conn, "SELECT DATABASE()")) {
		    $row = mysqli_fetch_row($result);
		    mysqli_free_result($result);
		    $this->db_close();
		    return $row[0];
		    
		}
	}

	// Este método permite ejecutar y abrir una consulta en SQL.
	function query($sql) {
		$this->conn = $this->db_connect() or die ("No fue posible connectar con la base de dados -> ".$this->database);
		if ($res = mysqli_query($this->conn,$sql) or die ("Inválida: ".mysqli_error())) {
			$this->db_close();
			return $res;
		}
		else {
			echo "No es posible ejecutar esta consulta: <br>";
			echo "$sql";
			$this->db_close();			
			return false;
		}
	}

	// Este método retorna un arreglo con los datos de una consulta ejecutada y cargada.
	function to_array($res) {
		if ($array = mysqli_fetch_array($res)) {
			return $array;
		}
		else {
			return false;
		}
	}
	
	// Este método retorna una fila de resultado como matriz (arreglo), de una consulta ejecutada y cargada.
	function to_row($res) {
		if ($array = mysqli_fetch_row($res)) {
			return $array;
		}
		else {
			return false;
		}
	}
			
	// Este método retorna el número de registros (filas) de una consulta ejecutada y cargada.
	function num_rows($res) {
		if ($num = mysqli_num_rows($res)) {
			return $num;
		}
		else {
			return false;
		}
	}
	
	// Este método retorna el número de campos de una consulta ejecutada y cargada.
	function num_fields($res) {
		if ($num = mysqli_num_fields($res)) {
			return $num;
		}
		else {
			return false;
		}
	}

	// Este método retorna el número de registros afectados por la ejecución de una consulta.
	function affected_rows($res) {
		if ($num = mysqli_affected_rows($res)) {
			return $num;
		}
		else {
			return false;
		}
	}

	// Este método Libera la memoria del resultado (consulta cargada).
	function free_result($res) {
		if (mysqli_free_result($res)) {
			return true;
		}
		else {
			return false;
		}
	}

	// Este método retorna una fila en forma de objeto, de una consulta ejecutada y cargada.
	function to_object($res) {
		if ($object = mysqli_fetch_object($res)) {
			return $object;
		}else {
			return false;
		}
	}	

    public function begin () {
        $this->conn->autocommit (false);
    }
    
    public function commit () {
        $this->conn->commit ();
    }
    
    public function rollback () {
      $this->conn->rollback ();
    }
   
}