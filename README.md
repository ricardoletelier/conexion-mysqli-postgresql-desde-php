# conexion-mysqli-postgresql-desde-php
como realizar clases de conexion a distintas base de datos sin modificar tus metodos de programacion

CREAMOS VARIAS CLASES DE CONEXION A DISTINTAS BASES DE DATOS PERO CREANDO METODOS IGUALES  EN TODAS LAS CLASES.

QUE LOGRAMOS CON ESTO?

AL MOMENTO DE CAMBIARNOS DE BASE DE DATOS NO DEVERIAMOS CAMBIAR NADA DEL CODIGO PHP YA PROGRAMADO

YA QUE TODOS LOS METODOS LLAMADOS TIENEN EL MISMO NOMBRE.




function db_connect() {
}

function db_close($conn) {
}

function db_name($database) {
}

function query($sql) {
}

function to_array($res) {
}

function to_row($res) {
}
		
function num_rows($res) {
}

function num_fields($res) {
}

function affected_rows($res) {
}

function free_result($res) {
}

function to_object($res) {
}		
