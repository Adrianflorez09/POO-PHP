<?php
include_once "cliente.php";

$id=$_GET['id'];
$cliente = Cliente::getID($id);
$cliente->delete();
header("refresh: 1;principal.php");
