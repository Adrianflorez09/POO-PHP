<?php
include_once "cliente.php";
// CREATE

$ids = $_POST['idest'];
$nomb = $_POST['nomest'];
$ape = $_POST['apellest'];
$dire = $_POST['direst'];
$tele = $_POST['tellest'];
$acud = $_POST['acuest'];
$cur = $_POST['curest'];

$cliente = new Cliente();
$cliente->id_estudiante = $ids;
$cliente->Nombre_estudiante = $nomb;
$cliente->Apellido_estud = $ape;
$cliente->direccion_est = $dire;
$cliente->telefono_est = $tele;
$cliente->acudiente = $acud;
$cliente->grupo_est = $cur;
$cliente->create();
header("refresh: 1;principal.php");
