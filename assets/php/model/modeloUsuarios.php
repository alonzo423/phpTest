<?php
include_once dirname(dirname(__FILE__)).'/clases.php';
Class ModeloUsuarios{
	private $Conexion;
	public function __construct(){
		$this->Conexion = new Conexion();
		$this->Conexion = $this->Conexion->conector();
	}

	public function autentificaSession($usuario, $pass){
		$query = "SELECT * FROM usuarios WHERE idUsuario = '".$usuario."' AND contrasena = '".$pass."'";

		$consulta = $this->Conexion->query($query);
		if($consulta->num_rows == 0){
			header("Location:index.php");
		}
	}
	public function autentificaUsuario($correo, $password){
		$query = "SELECT * 
				  FROM usuarios
				  WHERE
				  	correo = '".$correo."' AND
				  	contrasena = '".$password."'";
		$consulta = $this->Conexion->query($query);
		if($consulta->num_rows == 0){
			header("Location:index.php");
		}else{
			$row = $consulta->fetch_object();
			$_SESSION['idUsuario'] = $row->idUsuario;
			$_SESSION['correo'] = $row->correo;
			$_SESSION['pass'] = $row->contrasena;
		}
	}
}