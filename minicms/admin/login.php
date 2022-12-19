<?php
require_once '../configuracion.ini.php';
require_once './Conexiones/conexionDB.php';
require './Conexiones/conexionSesion.php';


session_start();
if (isset($_SESSION['administrador'])) {
    if ($_GET["logout"] == 1) {
        session_destroy();
    } else {
        header("Location: ../index.php");
    exit();
    }
}

$usuario = null;
$contrasena = null;
$usuarioValido = null;
$usuarioNoValido = null;

if (!empty($_POST)) {
    $user = $_POST['usuario'];
    $pass = $_POST['contrasena'];

    $usuario = new Administrador();
    $usuarioValido = $usuario->autenticar($user, $pass);
    if ($usuarioValido) {
        $_SESSION['administrador'] = $usuario;
        header("Location: ../index.php");
        exit();
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
    <title>Login</title>
</head>

<body>
    <!--Header-->
    <?php
        require './Componentes/header.php';
    ?>
    <div class="container-login">
        <form action="" method="POST">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-sm-4 offset-md-12">
                    <div class="card">
                        <img src="https://picsum.photos/432/100" class="card-img-top" alt="Login">
                        <div class="card-body">
                            <h5 class="card-title">Login</h5>
                            <div class="card-text mt-3">
                                <form action="" method="POST">
                                    <!--Email-->
                                    <div class="mb-3">
                                    <input type="email" class="form-control" maxlength="100" required id="usuario" 
                                            name="usuario" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <!--Contraseña-->
                                        <input type="password" class="form-control" maxlength="15" required id="contrasena" 
                                            name="contrasena" placeholder="">
                                    </div>
                                    <!--Alertas -->
                                    <div class="mb-3">
                                    <?php
                                        if ($usuarioValido) {
                                    ?>
                                        <div class="alert alert-success" role="alert">
                                        Usuario/a no válido/a, deberá intentar nuevamente.
                                        </div>
                                    <?php
                                        }
                                    ?>

                                    <?php
                                        if (!$usuarioNoValido)   {
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            
                                        </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                    <!--Boton-->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" style="float: right;">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div style="margin-bottom: 8%;">
    </div>
    <!--Footer-->
    <?php
        require './Componentes/footer.php';
    ?>
</body>
    
</html>