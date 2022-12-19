<?php
require_once 'configuracion.ini.php';
require './admin/Conexiones/conexionContenidoInfo.php';
require './admin/Conexiones/conexionClasificacion.php';
require './admin/Conexiones/conexionSesion.php';
?>
<?php

$contenidos = new Informacion();
if (isset($_GET['id'])){
    $contenidos->setidcontenido($_GET['id']);
}

if (!empty($_POST)) {
    $contenidos->setidcontenido($_POST["id"]);
    $contenidos->autor               = $_POST["autor"];
    $contenidos->clasificacion       = $_POST["clasificacion"];
    $contenidos->imagen              = $_POST["imagen"];
    $contenidos->titulo              = $_POST["titulo"];
    $contenidos->subtitulo           = $_POST["subtitulo"];
    $contenidos->contenido           = $_POST["contenido"];
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
    <link rel="stylesheet" href="./admin/Estilo.css">
    <title>Contenido</title>
</head>

<body>
    <!-- navegador superior - slider -->
    <?php
    require './admin/Componentes/header.php';
    require './admin/Componentes/slider.php';
    ?>
    <div style="margin-top: 8%;"></div>
    
    <div class="container">
        <!--Aqui va la el Titulo -->
        <div>
            <h1><?php echo $contenidos->titulo ?></h1>
        </div>
        <br>
        <!--Aqui va la el nombre de la clasificacion -->
        <div>
            <h6><?php echo $contenidos->clasificacion ?></h6>
        </div>
        <br>
        <!--Aqui va la el nombre del autor -->
        <div>
            <h6 style="text-align: right"><?php echo $contenidos->autor ?></h6>
        </div>
        <br>
        <!--Aqui va la el Subtitulo -->
        <div>
            <h6><?php echo $contenidos->subtitulo?></h6>
        </div>
        <br>
        <!--Aqui va la el Contenido -->
        <div>
            <h6><?php echo $contenidos->contenido?></h6>
        </div>
    
    </div>
    <div style="margin-bottom: 8%;"></div>
    <!-- informacion pie de pagina -->
    <?php
    require './admin/Componentes/footer.php';
    ?>
</body>

</html>