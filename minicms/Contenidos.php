<?php
require_once 'configuracion.ini.php';
require 'admin/Conexiones/conexionContenidos.php'
?>
<?php
$contenidos = new Contenidos();
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
    <title>Contenidos</title>
</head>

<body>
    <!-- navegador superior - slider -->
    <?php
    require './admin/Componentes/header.php';
    require './admin/Componentes/slider.php';
    ?>
    <div class="container" style="margin-bottom: 3%">
        <div>
            <h1>CONTENIDOS</h1>
        </div>
    </div>
    <?php
    $reg = $contenidos->listar();
    while ($file = $reg->fetch_assoc()) {
    ?>
        <div class="container" style="margin-bottom: 10px;">
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $file["imagen"] ?>" style="float:right;width:300px;height:200px;">
                </div>
                <div class="col-6">
                    <h3><?php echo $file["titulo"] ?></h3>
                    <!--<h3><?php echo $file["clasificacion"] ?></h3>-->
                    <!--<h6><?php echo $file["subtitulo"] ?></h6>-->
                    <!--<h3><?php echo $file["autor"] ?></h3>-->
                    <P><?php echo $file["contenido"] ?></P>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="container" style="margin-bottom: 8%;"></div>



    <!-- informacion pie de pagina -->
    <?php
    require './admin/Componentes/footer.php';
    ?>
</body>

</html>