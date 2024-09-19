<?php
require_once('Persona.php');

class Alumno extends Persona
{
    //Atributos
    private $_nota1;
    private $_nota2;

    //Metodos
    private function calcularPromedio()
    {
        return ($this ->_nota1+$this->_nota2)/2;
    }

    public function imprimirPromedio()
    {
        echo 'Mi promedio es '. $this ->calcularPromedio(). '<br>';
        echo '<br>';
        echo '<br>' ;

    }
     

}
?>