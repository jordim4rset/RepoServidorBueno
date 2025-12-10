<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROMOCIONES - FUTJORDI</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
   
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
    ?>

    <div>
            <h1 class="titulo_promociones">PROMOCIONES</h1>
    </div>


    <!-- TARJETAS PROMOCIONES -->
    <div class="contenedor-tarjetas" id="abajo">
        <div class="tarjeta">
            <h3>PACK SORPRESA</h3>
            <img src="img/caja_sorpresa.png" alt="CAJA SORPRESA">
            <p>El pack contiene: 1 Camiseta sorpresa, 1 Bufanda sorpresa, 1 Pegatina sorpresa<br><br>25</p>

        </div>
        <div class="tarjeta">
            <h3>3 X 2</h3>
            <img src="img/pepe_camiseta.png" alt="CAMISETAS 3X2">
            <p>Llevate 3 por el precio de 2!!<br><br>59,10€</p>
        </div>
    </div>

    <!-- PARRAFO CONDICIONES PROMOCIONES | INVENT DEL CHAT GPT -->
    <div class="condiciones">
        <p>¡Aprovecha nuestras increíbles promociones! Todas las ofertas actuales son válidas hasta el 30 de febrero, así que no dejes pasar la oportunidad de disfrutar de nuestros productos y servicios con descuentos exclusivos. Recuerda que estas promociones están sujetas a disponibilidad y aplican únicamente mientras duren las existencias.
            Nuestros clientes pueden beneficiarse de precios reducidos en artículos seleccionados, paquetes combinados y servicios adicionales sin costo extra. Además, durante este periodo especial, recibirás atención personalizada y ventajas únicas al realizar tus compras.
            No pierdas tiempo: las promociones finalizan el 30 de febrero. Visita nuestra tienda o página web, elige lo que más te guste y disfruta de todos los beneficios antes de que termine esta oferta limitada. ¡Es tu momento de ahorrar y aprovechar al máximo nuestras ofertas especiales!
        </p>
    </div>
    
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>