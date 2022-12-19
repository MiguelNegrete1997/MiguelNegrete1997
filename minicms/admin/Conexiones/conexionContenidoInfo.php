<?php
require_once "conexionDB.php";
?>
<?php
class Informacion {
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
    public function listar() {
    $db = new conexionDB();
    $sql = "SELECT c.idcontenido, c.idclasificacion, c.autor_idusuario, c.titulo, c.subtitulo, c.contenido, c.imagen,
                    concat_ws(' ', u.nombre, u.apellido) AS autor,
                    cl.nombre AS clasificacion
                    FROM contenidos c
                    INNER JOIN usuarios u ON c.autor_idusuario = u.idusuario
                    INNER JOIN clasificaciones cl ON c.idclasificacion = cl.idclasificacion
                    WHERE c.idcontenido = ?";
    $resultado = $db->ejecutar_pdo($sql, array());
    return $resultado;
}
}

?>