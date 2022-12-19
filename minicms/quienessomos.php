<?php
    require 'configuracion.ini.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin/Estilo.css">
    <title>Quienes Somos</title>
</head>

<body>
    <!-- navegador superior - slider -->
    <?php
    require './admin/Componentes/header.php';
    require './admin/Componentes/slider.php';
    ?>

    <div class="container" style="margin-bottom: 8%;">
        <div class="titleGeneral">
            <!--Titulo-->
            <h1>QUIENES SOMOS</h1>
        </div>
            <!--Texto-->
        <div class="textGeneral">
            <b><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac erat posuere,
                interdum magna sed, hendrerit turpis. Phasellus tincidunt mi maximus mauris faucibus sodales.
                Sed convallis ante justo, vel consequat tellus tristique quis. Donec elementum metus a massa scelerisque condimentum.
                Duis augue turpis, fringilla eget ipsum id, accumsan ultrices arcu. Donec quis nisi placerat, cursus est a,
                ultrices nulla. Aliquam pulvinar tortor urna, quis ultrices sem eleifend nec. Integer id nisi elit.
                Cras consequat id tellus a tincidunt. Nullam id laoreet orci. Vestibulum at libero tempus, facilisis massa ac, feugiat leo.<br></br> 
                Nulla pretium lobortis mauris nec eleifend.
                Proin efficitur dui tristique sapien fermentum mollis. Donec at purus vel turpis pulvinar pulvinar.
                Suspendisse vestibulum arcu nulla, sit amet pellentesque neque egestas at. Sed facilisis libero ut ornare vehicula. Aenean ex metus, 
                tincidunt quis gravida non, dictum eget lectus. Cras vitae cursus ex.<br></br>Nullam ut purus sit amet tortor sodales malesuada. 
                Morbi sodales dolor eros, at dictum tortor iaculis ut. Maecenas sit amet viverra dui, at consectetur leo. Nulla interdum lorem vel leo vehicula, 
                quis lacinia nulla tincidunt.
                Cras tempus odio id erat placerat, sed dignissim libero consectetur.
                Fusce nec neque porta sem convallis tempor quis at urna. Duis at condimentum tortor, vel ultricies lectus.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Curabitur massa risus, faucibus quis ornare id, imperdiet vitae urna. Etiam varius magna sem, in lacinia turpis tempor sed.
                Donec gravida sapien ut lorem malesuada, ut sodales lorem tempor. Maecenas ullamcorper pellentesque faucibus.
                Integer sagittis gravida nulla, vel volutpat orci pellentesque vitae. Fusce auctor erat ac quam faucibus iaculis.
                Aenean at nulla vel est placerat egestas in sit amet libero. Integer sed nisi non ipsum congue condimentum sed ut elit.
                Aliquam varius accumsan malesuada. Vestibulum eleifend libero vel sodales facilisis.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Suspendisse laoreet congue ullamcorper.<br></br>
                Proin viverra purus sem, in venenatis lorem dignissim sit amet. Proin consectetur diam nec nunc malesuada, non gravida eros efficitur. 
                In pharetra elit quam, eu pellentesque ipsum semper vel. Ut finibus nisi nec nisl facilisis, efficitur rutrum neque maximus.
                Proin porta sit amet justo quis sodales.<br></br>Donec eget ornare magna. Fusce luctus nibh ex, tincidunt commodo nunc sodales quis.
                Nam laoreet pretium leo, eget malesuada dui auctor quis. Curabitur eu volutpat eros. Quisque placerat, nisi sed egestas molestie, 
                massa velit aliquam leo, in accumsan diam sem in leo. Ut efficitur, nibh ut ullamcorper aliquet, tellus diam congue sem, vel varius metus mi quis tortor. 
                Donec porta lacinia velit quis porttitor. Phasellus dapibus varius turpis a tincidunt. Suspendisse luctus diam sit amet mi porta euismod. Maecenas mattis, 
                metus ultrices imperdiet facilisis, ante lectus egestas augue, nec hendrerit ante urna a ligula. Suspendisse eu dolor enim. Maecenas sagittis erat ipsum, 
                porta vestibulum nibh tristique eu. Nulla facilisi.
                Vivamus mattis mauris sit amet pellentesque bibendum. Praesent cursus sit amet urna sit amet cursus.
            </P></b>
        </div>
    </div>


    <!-- informacion pie de pagina -->
    <?php
    require './admin/Componentes/footer.php';
    ?>
</body>

</html>