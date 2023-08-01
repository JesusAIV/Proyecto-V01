<?php

if ($xhr){
    require_once "../../config/connection.php";
} else {
    require_once "./config/connection.php";
}

/**
 * Clase controlador para la gestion general del sistema
 */
class gestionController
{

    /**
     * Cuenta el total de registros en una tabla
     *
     * @param string $tabla
     * @return array $cantidad
     */
    public function cantidadRegistros($tabla){

        $conn = new Connection();
        $conn = $conn->connect();

        $sql = "SELECT COUNT(*) AS cantidad FROM {$tabla}";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $cantidad = $stmt->fetchAll();

        return $cantidad;
    }
}