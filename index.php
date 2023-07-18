<?php

    // llama al archivo viewcontroller.php de la carpeta controller
    require_once "./controller/viewcontroller.php";

    // Crea un objeto e instancia la clase "viewcontroller"
    $sistema = new viewcontroller();
    // Llama a la función "obtenersistema" para iniciar el archivo inicial del sistema
    $sistema->obtenersistema();