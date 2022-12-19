<?php

require_once "conexionDB.php";

class Clasificaciones {
    public $idclasificacion;
    public $nombre;

    public function __construct() {
    }

    public function setidclasificacion($idclasificacion)   {
        $this->idclasificacion = $idclasificacion;
        $this->obtener();
    }

    public function obtener() {
        $db = new conexionDB();
        $query = "SELECT * FROM clasificaciones where  idclasificacion = ?";
        $resultado = $db->ejecutar_pdo($query, array($this-> idclasificacion));
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $this->nombre = $fila["nombre"];            
        } else {
            $this->nombre = null;
        }
        $db->cerrar();
    }

    public function listar() {
        $db = new conexionDB();
        $sql = "SELECT  idclasificacion, nombre FROM clasificaciones ORDER BY  idclasificacion";
        $resultado = $db->ejecutar_pdo($sql, array());
        return $resultado;
    }

    public function imprimirFicha() {
    }
}
