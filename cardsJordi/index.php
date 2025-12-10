<?php
    /**
     *  @author Jordi Marset Tortosa
     *  @version 24-09-2025
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>SuitCards - Index</title>
</head>
<body>
    <h1>INDEX</h1>

    <?php
        //INCLUIMOS EL HEADER
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
    ?>
    <main>
        <div id="logo">
            <img src="/img/Logo_SuitCards.png" alt="Logo Suit Cards" class="logoIndex">
        </div>

        <h1 id="nombreJuego">SUIT CARDS</h1>
    </main>
    <?php
        //INCLUIMOS EL FOOTER
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>

