<?php
require_once '../configuracion.ini.php';
?>
<!--Para cerrar Sesion-->
<?php
    session_start();
    session_destroy();
    header("Location: login.php");
?>