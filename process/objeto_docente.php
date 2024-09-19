<?php
require_once('./model/Docente.php');

$docente = new Docente();
$docente ->setNombre('Albert');
$docente ->setApellido('Einstein');
$docente ->setTarifa(50);
$docente ->setHoras(80);
$docente ->calcularSueldo();

$docente ->imprimirDatos();
$docente -> imprimirSueldo();
?>