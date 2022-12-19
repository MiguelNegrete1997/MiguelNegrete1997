<?php 
class conexionDB {

    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli("127.0.0.1", "root","", "mc_cms");
        if ($this->conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }
    }
    
    public function ejecutar_pdo($sql, $parametros)  {
        $resultado = $this->conexion->prepare($sql);

        if (sizeof($parametros))    {
            $tipos = str_repeat("s", sizeof($parametros));
            $resultado->bind_param($tipos, ...$parametros);
        }
        $resultado->execute();
        $resultado = $resultado->get_result();
        return $resultado;
    }

    public function cerrar() {
        $this->conexion->close();
    }
}
?>