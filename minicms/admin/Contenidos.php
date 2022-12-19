<?php
require_once '../configuracion.ini.php';
require_once './Conexiones/conexionDB.php';
require './Conexiones/conexionContenidos.php';
require './Conexiones/conexionSesion.php';

session_start();
if(!isset($_SESSION['administrador'])){
    header("Location: ./login.php");
    exit();
}
?>

<?php
$contenidos = new Contenidos();
if (isset($_GET['idcontenido'])){
    $contenidos->setidcontenido($_GET['idcontenido']);  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo.css">
    <title>Contenido</title>
</head>
<body>
    <?php   
    require 'Componentes/header.php';
    ?>
    <div style="margin-top: 4%;"></div>
    <div class="col-12">
        <button id= "btn" type="button" class="btn btn-primary"
            onclick = "location.href = 'Contenido.php';">Agregar</button>
    </div>
    <br>
    </div>
    <div class="container-cards">
        <div class="containerOne">
            <div class="row">
                <!--Primera Tarjeta -->
                <?php
                $reg = $contenidos->listar();
                while ($file = $reg->fetch_assoc()) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div id="tarje" class="card" style="margin-bottom: 25px;">
                        <img src="<?php echo $file["imagen"]?>" style="width:300px;height:81px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="../Contenido.php?id=<?php echo $file['idcontenido']?>'"><h5 class="card-title"><?php echo $file["titulo"]?></h5></a>
                            <p class="card-text"><?php echo $file["subtitulo"]?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-danger btn-sm btn-sm" onclick="confirmdelete(<?php echo $file['idcontenido']?>)">Eliminar</button>
                                <button type="button" class="btn btn-primary btn-sm btn-sm" onclick = "location.href='Contenido.php?id=<?php echo $file['idcontenido']?>'">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <!--Segunda Tarjeta -->
                <?php
                while ($file = $reg->fetch_assoc()) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div id="tarje" class="card" style="width: 18rem; margin-bottom: 25px;">
                        <img src="<?php echo $file["imagen"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $file["titulo"] ?></h5>
                            <p class="card-text"><?php echo $file["subtitulo"]?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-danger btn-sm btn-sm" onclick="confirmdelete(<?php echo $file['idcontenido']?>)">Eliminar</button>
                                <button type="button" class="btn btn-primary btn-sm btn-sm">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <!--Tercera Tarjeta -->
                <?php
                while ($file = $reg->fetch_assoc()) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div id="tarje" class="card" style="width: 18rem; margin-bottom: 25px;">
                        <img src="<?php echo $file["imagen"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $file["titulo"] ?></h5>
                            <p class="card-text"><?php echo $file["subtitulo"]?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-danger btn-sm btn-sm" onclick="confirmdelete(<?php echo $file['idcontenido']?>)">Eliminar</button>
                                <button type="button" class="btn btn-primary btn-sm btn-sm">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php
                }
                ?>

                <!--Cuarta Tarjeta -->
                <?php
                while ($file = $reg->fetch_assoc()) {
                ?>
        <div class="containerTwo">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div id="tarje" class="card" style="width: 18rem; margin-bottom: 25px;">
                        <img src="<?php echo $file["imagen"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $file["titulo"] ?></h5>
                            <p class="card-text"><?php echo $file["subtitulo"]?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-danger btn-sm btn-sm" onclick="confirmdelete(<?php echo $file[' idcontenido']?>)">Eliminar</button>
                                <button type="button" class="btn btn-primary btn-sm btn-sm">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <!--Quinta Tarjeta -->
                <?php
                while ($file = $reg->fetch_assoc()) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div id="tarje" class="card" style="width: 18rem; margin-bottom: 25px;">
                        <img src="<?php echo $file["imagen"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $file["titulo"] ?></h5>
                            <p class="card-text"><?php echo $file["subtitulo"]?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-danger btn-sm btn-sm" onclick="confirmdelete(<?php echo $file[' idcontenido']?>)">Eliminar</button>
                                <button type="button" class="btn btn-primary btn-sm btn-sm">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <!--Sexta Tarjeta -->
                <?php
                while ($file = $reg->fetch_assoc()) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div id="tarje" class="card" style="width: 18rem; margin-bottom: 25px;">
                        <img src="<?php echo $file["imagen"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <b><h5 class="card-title"><?php echo $file["titulo"] ?></h5></b>
                            
                            <p class="card-text"><?php echo $file["subtitulo"]?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-danger btn-sm btn-sm" onclick="confirmdelete(<?php echo $file['idcontenido']?>)">Eliminar</button>
                                <button type="button" class="btn btn-primary btn-sm btn-sm">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
                <?php
                }
                ?>
<div style="margin-bottom: 5%;"></div>
    
    <script src="Eliminar.js"></script>

    <?php
        require 'Componentes/footer.php';
    ?>
</body>
</html>