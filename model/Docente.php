<?php 
require('Persona.php');

class Docente extends Persona
{
    //Atributos

    private $_tarifa;
    private $_horas;

    //Métodos

    private function calcularSueldo()
    {
        return $this ->_tarifa* $this->_horas;
    }
    public function imprimirSueldo()
}
?>