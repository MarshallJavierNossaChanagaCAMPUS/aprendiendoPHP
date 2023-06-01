<?php

    class Persona
    {
        private $nombre;
        private $apellido;
        private $edad;
        public function __construct($nombre, $apellido, $edad){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
        }
        public function mayorEdad(){
            return $this->edad >= 18;
        }
        public function nombreCompleto(){
            return $this->nombre." ".$this->apellido;
        }
    }
    
    $marshall = new Persona("Marshall", "Nossa", 20);

    if ($marshall->mayorEdad()) {
        echo "Si es mayor de edad";
    }

    echo $marshall->nombreCompleto().", Es el nombre completo de la persona";

?>