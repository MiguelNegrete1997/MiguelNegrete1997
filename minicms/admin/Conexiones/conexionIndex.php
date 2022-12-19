<?php

require_once "conexionDB.php";

class Contenido {
    public $idcontenido;
    public $idclasificacion;
    public $clasificacion;
    public $autor_idusuario;
    public $usuario;
    public $imagen;
    public $titulo;
    public $subtitulo;
    public $contenido;

    public function __construct()   {

    }

    public function listar() {
        $db = new conexionDB();
        $sql = "SELECT c.idcontenido, c.idclasificacion, c.autor_idusuario, c.titulo, c.subtitulo, c.contenido, c.imagen,
        concat_ws(' ', u.nombre, u.apellido) AS autor,
        cl.nombre AS clasificacion
        FROM contenidos c
        INNER JOIN usuarios u ON c.autor_idusuario = u.idusuario
        INNER JOIN clasificaciones cl ON c.idclasificacion = cl.idclasificacion
        ORDER BY 1 DESC LIMIT 5";
        $resultado = $db->ejecutar_pdo($sql, array());
        return $resultado;
    }    
}


?>