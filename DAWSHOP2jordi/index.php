<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTJORDI</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
    ?>    

    <div class="contenedor-tarjetas">
        <div class="tarjeta">
            <h3>VENTA DE CAMISETAS</h3>
            <img src="img/icono_comprar.png" alt="ICONO COMPRAR">
            <p>VENDEMOS TODAS LAS CAMISETAS DE FUTBOL, DE CUALQUIER EQUIPO Y SELECCIÓN</p>
        </div>
        <div class="tarjeta">
            <h3>COMPRA DE CAMISETAS</h3>
            <img src="img/icono_vender.png" alt="ICONO VENDER">
            <p>YA TE ABURREN TUS CAMISETAS? COMPRAMOS TUS CAMISETAS QUE YA NO QUIERAS</p>
        </div>
    </div>


    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>