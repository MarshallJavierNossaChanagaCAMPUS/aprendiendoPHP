<?php
    function autoload($class){
        //Directorios donde va a buscar las rutas de las clases
        $directories = [
            dirname(__DIR__)."/Ejercicio4/user/"
        ];
        //Esto convierte el nombre de la clase en un nombre de archivo relativo
        $classFile = str_replace("\\", "/", $class) . ".php";
        
        //Recorrer los directorios y buscar el archivo de la clase
        foreach ($directories as $directory) {
            $file = $directory . $classFile;
            if (file_exists($file)) {
                require $file;
                break;
            }
        }
    }

    spl_autoload_register("autoload");

    $obj = user::getInstance();

    var_dump($obj);
?>