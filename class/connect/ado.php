<?php
	class ado {
		var $conn;	
		var $host;
		var $database;
		var $user;
		var $password;
		var $charset;

		// Este método permite crear y abrir una conexión con ...
		function db_connect() {
		}
		
		// Este método permite cerrar una conexión de ...
		function db_close() {
			echo "Este método (db_close) NO está disponible para la base de datos.";					
		}
		
		// Este método retorna el nombre de la base de datos, según la conexión abierta.
		function db_name($database,$conn) {
			print("Este método (db_name) NO está disponible para la base de datos.");		
		}

		// Este método permite ejecutar y abrir una consulta en SQL.
		function query($sql) {
			echo "Este método (query) NO está disponible para la base de datos.";			
		}

		// Este método retorna un arreglo con los datos de una consulta ejecutada y cargada.
		function to_array($res) {
			echo "Este método (to_array) NO está disponible para la base de datos.";			
		}
		
		// Este método retorna el número de registros (filas) de una consulta ejecutada y cargada.
		function num_rows($res) {
			echo "Este método (num_rows) NO está disponible para la base de datos.";			
		}

		// Este método retorna el número de campos de una consulta ejecutada y cargada.
		function num_fields($res) {
			echo "Este método (num_fields) NO está disponible para la base de datos.";			
		}

		// Este método retorna el número de registros afectados por la ejecución de una consulta.
		function affected_rows($res) {
			echo "Este método (affected_rows) NO está disponible para la base de datos.";			
		}

		// Este método retorna una fila en forma de objeto.
		function to_object($res) {
			echo "Este método (to_object) NO está disponible para la base de datos.";			
		}				
	}
?>