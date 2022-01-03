<?php 
abstract class OperacionesBD{
	abstract protected function insert($selectTipoVehiculo, $idUsuario, $inputNumeroLlantas, $inputPotenciaMotor);
	abstract protected function get();
}
?>