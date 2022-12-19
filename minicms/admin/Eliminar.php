<?php
require './Conexiones/conexionContenidos.php';
$contenidos = new Contenidos();
if (isset($_GET['id'])){
    $contenidos->setidcontenido($_GET['id']);
    $delete = $contenidos->eliminar();
    header("Location:./Contenidos.php");
}else { echo ("No se pudo eliminar el Contenido");

    };
?>