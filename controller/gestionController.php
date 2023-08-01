<?php

if ($xhr){
    require_once "../../config/connection.php";
    require_once "../../controller/mainController.php";
} else {
    require_once "./config/connection.php";
    require_once "./controller/mainController.php";
}

/**
 * Clase controlador para la gestion general del sistema
 */
class gestionController extends mainController
{

    /**
     * Cuenta el total de registros en una tabla
     *
     * @param string $tabla
     * @return string $respuesta
     */
    public function cantidadRegistros($tabla){

        try {
            $conn = new Connection();
            $conn = $conn->connect();

            $sql = "SELECT COUNT(*) AS cantidad FROM {$tabla}";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $cantidad = $stmt->fetchAll();

            $respuesta = $cantidad[0]->cantidad;

            return $respuesta;
        } catch (Exception $e){
            $respuesta = "not found";

            return $respuesta;
        }

    }
}