<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo-FUTJORDI</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
    ?>

    <!-- TARJETAS PARA LOS PRODUCTOS DEL CATALOGO -->
    <!-- TARJETAS ARRIBA -->
    <div class="contenedor-tarjetas" id="arriba">
        <div class="tarjeta">
            <h3>FC BARCELONA</h3>
            <img src="img/barcelona_camiseta.png" alt="ICONO VENDER">
            <p> XS | S | M | L | XL <br><br>29,55€</p>
        </div>
        <div class="tarjeta">
            <h3>REAL MADRID</h3>
            <img src="img/realmadrid_retro.png" alt="CAMISETA REAL MADRID">
            <p> XS | S | M | L | XL <br><br>29,55€</p>
        </div>
        <div class="tarjeta">
            <h3>ESPAÑA</h3>
            <img src="img/espana_camiseta.png" alt="CAMISETA SELECCIÓN ESPAÑOLA">
            <p> XS | S | M | L | XL <br><br>29,55€</p>
        </div>
    </div>

    <br>

    <!-- TARJETAS BAJO -->
    <div class="contenedor-tarjetas" id="abajo">
        <div class="tarjeta">
            <h3>AC MILÁN</h3>
            <img src="img/milan_camiseta.png" alt="CAMISETA AC MILÁN">
            <p> XS | S | M | L | XL <br><br>29,55€</p>

        </div>
        <div class="tarjeta">
            <h3>BENFICA</h3>
            <img src="img/camiseta_benfica.png" alt="CAMISETA BENFICA">
            <p> XS | S | M | L | XL <br><br>29,55€</p>
        </div>
    </div>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>