<?php 
session_start();
include_once dirname(dirname(__FILE__)).'/model/modeloVehiculos.php';
include_once dirname(dirname(__FILE__)).'/funciones.php';

$Basicas = new Basicas();
$ModeloVehiculo = new ModeloVehiculo();
$selectTipoVehiculo = $Basicas->inyeccionSQL($_POST['selectTipoVehiculo']);
$inputNumeroLlantas = $Basicas->inyeccionSQL($_POST['inputNumeroLlantas']);
$inputPotenciaMotor = $Basicas->inyeccionSQL($_POST['inputPotenciaMotor']);


$llamada = $ModeloVehiculo->insert($selectTipoVehiculo, $_SESSION['idUsuario'], $inputNumeroLlantas, $inputPotenciaMotor);

echo $llamada;
?>