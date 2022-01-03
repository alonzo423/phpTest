<?php 
include_once dirname(dirname(__FILE__)).'/clases.php';
include_once dirname(dirname(__FILE__)).'/model/abstractBD.php';
class ModeloVehiculo extends OperacionesBD{
	private $Conexion;
	public function __construct(){
		$this->Conexion = new Conexion();
		$this->Conexion = $this->Conexion->conector();		
	}

	public function insert($selectTipoVehiculo, $idUsuario, $inputNumeroLlantas, $inputPotenciaMotor){
		$query = "INSERT INTO vehiculos VALUES(NULL, ".$selectTipoVehiculo.", 1,".$inputNumeroLlantas.", ".$inputPotenciaMotor.")";


		if($this->Conexion->query($query)){
			$datos[] = array('Codigo'=>'1', "leyenda"=>CODIGO1);
		}else{
			$datos[] = array('Codigo'=>'2', "leyenda"=>CODIGO2);
		}
		return json_encode($datos);	


	}
	public function getTipoVehiculos(){
		$query = "SELECT *
					FROM tipovehiculo";
		$datos = Array();
		$consulta = $this->Conexion->query($query);

		if($consulta->num_rows > 0 ){
			for ($i=0; $i < $consulta->num_rows; $i++) {
				$row = $consulta->fetch_object();
				$data[]=array(
							'idTipoVehiculo'=>$row->idTipoVehiculo,
							'tipoVehiculo'=>$row->tipoVehiculo
						);
			}
			
			$datos[] = array('Codigo'=>'1', 'leyenda'=>CODIGO1, 'data'=>$data);
		}else{
			$datos[] = array('Codigo'=>'0', 'leyenda'=>CODIGO3);
		}
		return json_encode($datos);
	}

	public function get(){
		$query = "SELECT A.*, B.tipoVehiculo, C.correo
					FROM vehiculos A, tipovehiculo B, usuarios C
					WHERE
					  A.idUsuario = C.idUsuario AND
					  A.idTipoVehiculo = B.idTipoVehiculo";
		$datos = Array();
		$consulta = $this->Conexion->query($query);

		if($consulta->num_rows > 0 ){
			for ($i=0; $i < $consulta->num_rows; $i++) {
				$row = $consulta->fetch_object();
				$data[]=array(
							'idVehiculo'=>$row->idVehiculo,
							'idTipoVehiculo'=>$row->idTipoVehiculo,
							'numeroLlantas'=>$row->numeroLlantas,
							'potenciaMotor'=>$row->potenciaMotor,
							'tipoVehiculo'=>$row->tipoVehiculo,
							'correo'=>$row->correo
						);
			}
			
			$datos[] = array('Codigo'=>'1', 'leyenda'=>CODIGO1, 'data'=>$data);
		}else{
			$datos[] = array('Codigo'=>'0', 'leyenda'=>CODIGO3);
		}
		return json_encode($datos);
	}
}