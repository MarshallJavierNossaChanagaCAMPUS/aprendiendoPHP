<?php
    //Realiza verificacion mas rigurosas en la asignación de tipos de datos, esto ayuda a prevenir errores
    trait firstTrait {
        //Esta es la propiedad singleton
        public static $instance;
        public $nombre;
        public $apellido;
        function __construct($nombre, $apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
    }
    class user {
        use firstTrait;
        //Se crea el metodo singleton, este se usa para evitar que se duplique o que se repita la instancia de la clase
        public static function getInstance(){
            //Se mira si la instancia está definida y si no lo está se define
            if (self::$instance === null) {
                self::$instance = new self("Marshall", "Nossa");
            }
            return self::$instance;
        }
        public function obtenerNombre(){
            return $this->nombre;
        }
    }
?>