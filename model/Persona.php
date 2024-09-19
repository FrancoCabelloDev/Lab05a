<?php

class Persona
{
    //ATRIBUTOS
    private $_nombre;
    private $_apellidos;

    //MÉTODOS
    public function imprimirDatos() 
    {
        echo 'Mi nombre es '. $this->_nombre. ' '. $this-> _apellidos . '<br>';
        echo '<br>';
        echo '<br>';
    }

    //GETTERS AND SETTERS
    public function getNombre()
    {
        return $this ->_nombre;
    }

    public function setNombre($_nombre)
    {
        $this->_nombre=$_nombre
    }
}

?>