<?php

require_once "viewcontroller.php";
require_once "./config/constantes.php";

/***
 * Archivo controlador para configuración del sistema
 */
class configController{

    /**
     * Indica la página en el que nos encontramos
     *
     * @return string retorna la vista de la página
     */
    public function viewUrl(){

        $viewurl = "";
        if(empty($_GET["views"])){
            // Si no existe una vista en la URL, por defecto será "inicio"
            $viewurl = "inicio";
        } else {
            // Separa el "/" de la url y obtiene la vista ingresada en la url
            $pagina = explode("/", $_GET["views"]);
            // Obtiene la posicion "0"
            $viewurl = $pagina[0];
        }

        return $viewurl;

    }

    /**
     * Titulo de la página web
     *
     * @return string retorna el titulo de la página
     */
    public function titleWeb(){
        $view = $this->viewUrl();

        $title = ucfirst($view);

        return $title;
    }

    /**
     * Mostrar la página según la vista
     *
     * @return string ruta a página
     */
    public function showPage($idRol){
        $viewUrl = $this->viewUrl();
        $view = new viewcontroller();
        $page= $view->obtenervistacontrolador();

        $page = ($page == "pageDefault") ? "./view/content/404.php" : $page;

        return $page;
    }

    /**
     * Muestra la página por defecto
     */
    public function pageDefault($idRol){
        $page = "";
        if (ID_ROLE_EMPLOYEES == $idRol){
            $page = PAGE_DEFAULT_EMPLOYEES;
        } elseif (ID_ROLE_CUSTOMERS == $idRol) {
            $page = PAGE_DEFAULT_CUSTOMERS;
        } else {
            $page = "404";
        }

        return $page;
    }

    /**
     * Ruta a estilos css
     *
     * @return string retorna la ruta a los estilos css
     */
    public function rutaCss(){
        $ruta = SERVERURL.'view/css/';

        return $ruta;
    }

    /**
     * Ruta a scripts js
     *
     * @return string retorna la ruta a los scripts js
     */
    public function rutaJs(){
        $ruta = SERVERURL.'view/js/';

        return $ruta;
    }

    /**
     * Ruta a imagenes
     */
    public function rutaImage($rutaimg){
        echo SERVERURL."view/img/$rutaimg";
    }

    /**
     * Ruta a enlaces
     */
    public function rutaLink($enlace){
        echo SERVERURL.$enlace;
    }
}
