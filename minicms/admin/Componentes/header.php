<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo.css">
</head>

<body>
        <ul class="menu">
            <li><img src="https://i.ibb.co/sHSrdwF/Solo-Logo-Sin-Fondo.png" width="40" height="40"></a></li>
            <li><a href="<?php echo $url ?>/index.php">Inicio</a></li>
            <li><a href="<?php echo $url ?>/Contenidos.php">Contenidos</a></li>
            <li><a href="<?php echo $url ?>/quienessomos.php">Quienes Somos</a></li>
            <li style="float: right;"><a href="<?php echo $url ?>/admin/login.php">Iniciar Sesion</a></li>
            <li style="float: right;"><a href="<?php echo $url ?>/admin/logout.php">Cerrar Sesion</a></li>
        </ul>
</body>

</html>