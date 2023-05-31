<?php
    class Calculadora
    {
        private $num1;
        private $num2;
        public function __construct($num1, $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        public function suma(){
            return $this->num1 + $this->num2;
        }
        public function resta(){
            return $this->num1 - $this->num2;
        }
        public function multiplicacion(){
            return $this->num1 * $this->num2;
        }
        public function division(){
            if ($this->num2 != 0) {
                return $this->num1 / $this->num2;
            } else {
                return "ERROR";
            }
            
            
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        $calculadora = new Calculadora($num1, $num2);

        switch ($operacion) {
            case 'suma':
                $resultado = $calculadora->suma();
                break;
            case 'resta':
                $resultado = $calculadora->resta();
                break;
            case 'multiplicacion':
                $resultado = $calculadora->multiplicacion();
                break;
            case 'division':
                $resultado = $calculadora->division();
                break;
        }
        echo "El resultado es $resultado";
    }
?>