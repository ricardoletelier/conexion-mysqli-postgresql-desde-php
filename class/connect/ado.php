<?php
	class ado {
		var $conn;	
		var $host;
		var $database;
		var $user;
		var $password;
		var $charset;

		// Este m�todo permite crear y abrir una conexi�n con ...
		function db_connect() {
		}
		
		// Este m�todo permite cerrar una conexi�n de ...
		function db_close() {
			echo "Este m�todo (db_close) NO est� disponible para la base de datos.";					
		}
		
		// Este m�todo retorna el nombre de la base de datos, seg�n la conexi�n abierta.
		function db_name($database,$conn) {
			print("Este m�todo (db_name) NO est� disponible para la base de datos.");		
		}

		// Este m�todo permite ejecutar y abrir una consulta en SQL.
		function query($sql) {
			echo "Este m�todo (query) NO est� disponible para la base de datos.";			
		}

		// Este m�todo retorna un arreglo con los datos de una consulta ejecutada y cargada.
		function to_array($res) {
			echo "Este m�todo (to_array) NO est� disponible para la base de datos.";			
		}
		
		// Este m�todo retorna el n�mero de registros (filas) de una consulta ejecutada y cargada.
		function num_rows($res) {
			echo "Este m�todo (num_rows) NO est� disponible para la base de datos.";			
		}

		// Este m�todo retorna el n�mero de campos de una consulta ejecutada y cargada.
		function num_fields($res) {
			echo "Este m�todo (num_fields) NO est� disponible para la base de datos.";			
		}

		// Este m�todo retorna el n�mero de registros afectados por la ejecuci�n de una consulta.
		function affected_rows($res) {
			echo "Este m�todo (affected_rows) NO est� disponible para la base de datos.";			
		}

		// Este m�todo retorna una fila en forma de objeto.
		function to_object($res) {
			echo "Este m�todo (to_object) NO est� disponible para la base de datos.";			
		}				
	}
?>