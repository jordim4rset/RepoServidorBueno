<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
    ?>

     <div>
            <h1 class="titulo_dondeestamos">DONDE ESTAMOS?</h1>
    </div>

    
    
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d647.0743767842648!2d-0.6029493259524434!3d38.82418033721682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6177fdd9491999%3A0x970ff0a68b6f3e87!2sEl%20Teler!5e0!3m2!1ses!2ses!4v1757948767106!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        
    
    
    <div class="formulario">
        <h1>FORMULARIO</h1>
        <form action="" method="post">
            <label for="nombre">NOMBRE y APELLIDOS:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <br>
            <label for="tel">TÉLEFONO:</label>
            <input type="tel" name="tel" id="tel" required>
            <br>
            <br>
            <label for="email">EMAIL:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <br>
            <label for="asunto">ASUNTO:</label>
            <input type="text" name="asunto" id="asunto">
            <br>
            <br>
            <label for="comentario">COMENTARIO:</label>
            <textarea name="comentario" id="comentario" required></textarea>
            <br>
            <br>
            <button type="reset">BORRAR</button>
            <button type="submit">ENVIAR</button>
        </form>
    </div>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>