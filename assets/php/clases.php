<?php
include_once "CONST.php";
class Conexion{
	public function conector()
	{
		$mysqli = new mysqli(HOST, USER,PASSWORD, BD);
		if ($mysqli -> connect_errno) {
		die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
		}
		$mysqli->set_charset("utf8");
		return $mysqli;
	}

    public function close() {
        mysqli_close();
    } 
}
?>