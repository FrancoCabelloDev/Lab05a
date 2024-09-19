<?php
require(',/model/Persona.php');
require(',/model/Alumno.php');

$alumno = new Alumno();
$alumno ->setNombre('Juan');
$alumno->setApellidos('Salazar Mori');
$alumno ->setNota1(15);
$alumno ->setNota2(17);


?>