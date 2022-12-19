<?php

require_once "conexionDB.php";

class Contenidos {
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

    public function setidcontenido($idcontenido)   {
        $this->idcontenido = $idcontenido;
        $this->obtener();
    }

        //OBTENER INFO//
    public function obtener()   {
        $db = new conexionDB();
        $query= "SELECT c.idcontenido, c.idclasificacion, c.autor_idusuario, c.titulo, c.subtitulo, c.contenido, c.imagen,
        concat_ws(' ', u.nombre, u.apellido) AS autor,
        cl.nombre AS clasificacion
        FROM contenidos c
        INNER JOIN usuarios u ON c.autor_idusuario = u.idusuario
        INNER JOIN clasificaciones cl ON c.idclasificacion = cl.idclasificacion
        WHERE c.idcontenido = ?";
        $resultado = $db->ejecutar_pdo($query, array($this->idcontenido));
        if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $this->idcontenido   = $fila["idcontenido"];
        $this->autor         = $fila["autor"];
        $this->clasificacion = $fila["clasificacion"];
        $this->imagen        = $fila["imagen"];
        $this->titulo        = $fila["titulo"];
        $this->subtitulo     = $fila["subtitulo"];
        $this->contenido     = $fila["contenido"];
        } else {
        $this->idcontenido   = null;
        $this->autor         = null;
        $this->clasificacion = null;
        $this->imagen        = null;
        $this->titulo        = null;
        $this->subtitulo     = null;
        $this->contenido     = null;
}
        $db->cerrar();
    }
      //AGREGAR INFO//
    public function agregar() {
        $db = new conexionDB();
        $query = "INSERT INTO contenidos VALUES (NULL ,?, ?, ?, ?, ?, ?)";
        $parametros = array($this->idclasificacion, $this->autor_idusuario, $this->imagen, $this->titulo, $this->subtitulo, $this->contenido);
        $db->ejecutar_pdo($query, $parametros);
        $db->cerrar();
    }
        //MODIFICAR INFO//
    public function modificar() {
        $db = new conexionDB();
        $query = "UPDATE contenidos SET idclasificacion = ?, autor_idusuario = ?, imagen = ?, titulo = ?, subtitulo = ?, contenido = ? WHERE idcontenido = ?";
        $parametros = array($this->idclasificacion, $this->autor_idusuario, $this->imagen, $this->titulo, $this->subtitulo, $this->contenido, $this->idcontenido);
        $db->ejecutar_pdo($query, $parametros);
        $db->cerrar();
    }
        //LISTAR INFO//
    public function listar() {
        $db = new conexionDB();
        $sql = "SELECT c.idcontenido, c.idclasificacion, c.autor_idusuario, c.titulo, c.subtitulo, c.contenido, c.imagen,
        concat_ws(' ', u.nombre, u.apellido) AS autor,
        cl.nombre AS clasificacion
        FROM contenidos c
        INNER JOIN usuarios u ON c.autor_idusuario = u.idusuario
        INNER JOIN clasificaciones cl ON c.idclasificacion = cl.idclasificacion ORDER BY 1 DESC";
        $resultado = $db->ejecutar_pdo($sql, array());
        return $resultado;
    }

    public function eliminar()  {
        $db = new conexionDB();
        $query = "DELETE FROM contenidos WHERE idcontenido=?";
        $db->ejecutar_pdo($query, array($this->idcontenido));
        $db->cerrar();
    }

    public function imprimirFicha() {

    }



}


?>