<?php
require_once '../configuracion.ini.php';
require_once './Conexiones/conexionDB.php'   ;
require './Conexiones/conexionClasificacion.php';
require './Conexiones/conexionContenidos.php';

session_start();
if(!isset($_SESSION['administrador'])){

    header("Location: ./login.php");
    exit();
}
$clasificacion = new Clasificaciones();
$seleccionClasificaciones = $clasificacion->listar();


$contenidos = new Contenidos();
if (isset($_GET['id'])){
    $contenidos->setidcontenido($_GET['id']);
}

if (!empty($_POST)) {
    $contenidos->setidcontenido($_POST["idcontenido"]);
    $contenidos->idclasificacion = $_POST["idclasificacion"];
    $contenidos->autor_idusuario = $_SESSION['administrador']['idusuario'];
    $contenidos->imagen          = $_POST["imagen"];
    $contenidos->titulo          = $_POST["titulo"];
    $contenidos->subtitulo       = $_POST["subtitulo"];
    $contenidos->contenido       = $_POST["contenido"];
    if ($_POST["idcontenido"] == 0) {
        $contenidos->agregar();
    }else{
        $contenidos->modificar();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo.css">
    <title>Contenido</title>
</head>

<body>
    <!-- navegador superior -->
    <?php
        require 'Componentes/header.php';
    ?>
    <!-- contenido centro-->
    <div class="container3">
        <section class="d-flex justify-content-center align-items-center ">
            <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-6 p-4" id="card">
                <div class="mb-4 d-flex justify-content-start align-items-center">
                    <h4> <i class="bi bi-chat-left-quote"></i> &nbsp; Contenido</h4>
                </div>
                <div class="mb-1">
                    <form method="POST" id="contacto">
                    <input type="hidden" name="idcontenido" value="<?php echo $contenidos->idcontenidos?>">
                        <!-- menu desplegable-->
                        <div class="mb-3 row">
                            <label name="clasificacion" class="col-sm-4 col-form-label">Clasificación</label>
                            <div class="col-sm-4">
                                <select  name="idclasificacion" class="form-select">
                                <?php
                                    foreach ($seleccionClasificaciones as $key => $value) {
                                    $selected = " ";
                                    if ($value["idclasificacion"] == $idclasificacion) {
                                    $selected = "selected";
                                    }
                                    echo "<option value='".$value["idclasificacion"]."'".$selected.">".$value["nombre"]."</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- label/input imagenn-->
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Imagen</label>
                            <div class="col-sm-8">
                                <input type="url" class="form-control" name="imagen"
                                value="<?php echo $contenidos->imagen ?>">
                            </div>
                        </div>
                        <!-- label/input Titulo del Contenido-->
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Titulo del Contenido</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="titulo"
                                value="<?php echo $contenidos->titulo?>">
                            </div>
                        </div>
                        <!-- label/input Resumen-->
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Resumen</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="subtitulo" placeholder="Resumen del contenido" 
                                rows="3"><?php echo $contenidos->subtitulo?></textarea>
                            </div>
                        </div>
                        <!-- label/input Contenido-->
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Contenido</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="contenido" placeholder="Texto del contenido" 
                                rows="3"><?php echo $contenidos->contenido?></textarea>
                            </div>
                        </div>
                        <!-- boton cancelar/guardar-->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
                            <button type="button" class="btn btn-danger" onclick="location.href = 'Contenidos.php';">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- informacion pie de pagina -->
    <?php
        require 'Componentes/footer.php';
    ?>
</body>

</html>