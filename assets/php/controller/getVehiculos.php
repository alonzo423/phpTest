<?php 
session_start();
include_once dirname(dirname(__FILE__)).'/funciones.php';
include_once dirname(dirname(__FILE__)).'/model/modeloVehiculos.php';

$ModeloVehiculo = new ModeloVehiculo();
$llamada = $ModeloVehiculo->get();
$llamada = json_decode($llamada);
include_once '../view/getVehiculos.php';

?>