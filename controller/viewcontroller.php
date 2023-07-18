<?php
    require_once  "./model/viewmodel.php";

    class viewcontroller extends viewmodel
    {

        /**
         * Redirige a la vista principal
         *
         * @return void Retorna el archivo de la vista principal
         */
        public function obtenersistema()
        {
            return require_once "./view/index.php";
        }

        /**
         * Obtiene el parametro views por GET que está configurado en el archivo .htaccess
         *
         * @return string devuelve la vista
         */
        public function obtenervistacontrolador()
        {
            if (isset($_GET['views'])) {
                $ruta = explode("/", $_GET['views']);
                $respuesta = viewmodel::obtenervistamodelo($ruta[0]);
            } else {
                $respuesta = "pageDefault";
            }
            return $respuesta;
        }
    }