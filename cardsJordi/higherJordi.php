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
    <link rel="stylesheet" href="/css/styles.css">
    <title>SuitCards - Carta Alta</title>
</head>
<body>
    <h1>CARTA ALTA</h1>
    <?php
        //INCLUIMOS EL HEADER Y LA FUNCIÓN DE CREAR EL MAZO
        require_once ($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
        require_once ($_SERVER['DOCUMENT_ROOT'] .'/includes/getdeck.inc.php');
    
        //OBTENEMOS TODAS LAS CARTAS
        $deck = createDeck ();

        //BARAJAMOS LA BARAJA DE CARTAS
        shuffle($deck);

        //CREAMOS A LOS 2 JUGADORES
        $player1 = ["Jordi",[]];
        $player2 = ["Dani",[]];

        //REPARTIMOS LAS CARTAS A CADA JUGADOR
        for ($i = 0; $i < 10; $i++) {
            $player1[1][] = array_shift($deck);
            $player2[1][] = array_shift($deck);
        }
    ?>
    <div id="boardGame">
        <div id="boardPlayer1">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/img_JordiMarset.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player1[0].'</h2><br>';  

                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player1[1]); $i++){
                    echo '<div><img src="/img/cards/'.$player1[1][$i]['image'].'"> </div>';
                }
            ?>
        </div>
        <div id="boardPlayer2">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/dani.jpg" alt="Foto Jordi" class="fotoJugador">

            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player2[0].'</h2><br>';  

                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player2[1]); $i++){
                    echo '<div class="carta"><img src="/img/cards/'.$player2[1][$i]['image'].'"></div>';
                }
            ?>
        </div>
    </div>

    <?php
        //JUEGO
        $pointsP1 = 0;
        $pointsP2 = 0;
        for($i = 0; $i < count($player2[1]); $i++){
            if($player1[1][$i]['value'] == 0 && $player2[1][$i]['value'] == 0){
                if($pointsP1 > $pointsP2){
                    $pointsP1 -= 2;
                }else if($pointsP1 < $pointsP2){
                    $pointsP2 -= 2;
                }else{
                    $pointsP1 -= 2;
                    $pointsP2 -= 2;
                }
            }else if($player1[1][$i]['value'] == $player2[1][$i]['value']){
                $pointsP1 += 1;
                $pointsP2 += 1;
            }else if($player1[1][$i]['value'] > $player2[1][$i]['value']){
                $pointsP1 += 1;
            }else if($player1[1][$i]['value'] < $player2[1][$i]['value']){
                $pointsP2 += 1;
            }else if($player1[1][$i]['value'] == 0 && $player2[1][$i]['value'] != 0){
                $pointsP1 += 2;
                $pointsP2 -= 1;
            }else if($player1[1][$i]['value'] != 0 && $player2[1][$i]['value'] == 0){
                $pointsP2 += 2;
                $pointsP1 -= 1;
            }
        }

        //MOSTRAMOS LOS PUNTOS QUE HAN CONSEGUIDO CADA JUGADOR
        echo '<h2>Puntos '.$player1[0].': '.$pointsP1;
        echo '<h2>Puntos '.$player2[0].': '.$pointsP2;
        
        //SACAMOS EL GANADOR
        if($pointsP1 > $pointsP2){
            echo '<h1>GANA '.$player1[0].'</h2>';
        }else if($pointsP1 == $pointsP2){
            echo '<h1>EMPATEEEE</h2>';
        }else{
            echo '<h1>GANA '.$player2[0].'</h2>';
        }

        //INCLUIMOS EL FOOTER
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>