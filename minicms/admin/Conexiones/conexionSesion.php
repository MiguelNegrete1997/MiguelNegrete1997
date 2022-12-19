<?php
require_once "conexionDB.php";

class Administrador {
    public $idusuario;
    public $email;
    public $nombre;
    public $apellido;
    public $contrasena;
    public $activo;

    public function __construct()   {

    }

    public function setidusuario($idusuario)   {
        $this->idusuario = $idusuario;
        $this->obtener();
    }
        
         //OBTENER INFO//
        public function obtener()   {
            $db = new conexionDB();
            $query= "SELECT * FROM usuarios WHERE idusuario = ?"; 
            $resultado = $db->ejecutar_pdo($query, array($this->idusuario));
            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                $this->idusuario    = $fila["idusuario"];
                $this->email        = $fila["email"];
                $this->nombre       = $fila["nombre"];
                $this->apellido     = $fila["apellido"];
                $this->contrasena   = $fila["contrasena"];
                $this->activo       = $fila["activo"];
            } else {
                $this->idusuario    = null;
                $this->email        = null;
                $this->nombre       = null;
                $this->apellido     = null;
                $this->contrasena   = null;
                $this->activo       = null;
            }
        }

    public function listar()   {
        $db = new conexionDB();
        $sql = "SELECT idusuario id, concat_ws(' ', nombre, apellido) nombre FROM usuarios";
        $resultado = $db->ejecutar_pdo($sql, array());
        return $resultado;
    }

    public function autenticar($email, $contrasena)   {
        $db = new conexionDB();
        $sql = "SELECT * FROM usuarios WHERE email = ? AND contrasena = ? AND activo = 1";
        $parametros = array($email, $contrasena);
        $resultado = $db->ejecutar_pdo($sql, $parametros);
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $this->idusuario  = $fila["idusuario"];
            $this->email      = $fila["email"];
            $this->nombre     = $fila["nombre"];
            $this->apellido   = $fila["apellido"];
            //$this->contrasena = $fila["contrasena"];
            //$this->activo     = $fila["activo"];
            return true;
        }else{
            return false;
        }
        
    }
}
?>
