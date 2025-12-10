<?php
    /** 
     *  @author Jordi Marset Tortosa
     *  @version 25-09-2025
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>SuitCards - BlackJack</title>
</head>
<body>
    <h1>BLACK JACK</h1>
    <?php
        //INCLUIMOS EL HEADER
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.inc.php');
    ?>
    <?php
        //INCLUIMOS LA FUNCIÓN PARA CREAR LA BARAJA, CONTAR PUNTOS Y SELECCIONAR LOS GANADORES
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/getdeck.inc.php');
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/countPoints.inc.php');
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/winner.inc.php');
        $deck = createDeck();

        //ELIMINAMOS LOS JOKERS
        array_pop($deck);
        array_pop($deck);
        
        //BARAJAMOS
        shuffle($deck);

        //CREAMOS LOS 5 JUGADORES Y A LA BANCA
        $player1 = ["Jordi",[]];
        $player2 = ["Dani",[]];
        $player3 = ["Alex",[]];
        $player4 = ["Liam",[]];
        $player5 = ["Elias",[]];
        $bank = ["Banca",[]];

        //CREAMOS LAS VARIABLES PARA ALMACENAR EL VALOR DE LAS MANOS
        $valueHand1 = 0;
        $valueHand2 = 0;
        $valueHand3 = 0;
        $valueHand4 = 0;
        $valueHand5 = 0;
        $valueHandBank = 0;


        //REPARTIMOS 2 CARTAS A LOS JUGADORES
        for($i = 0; $i < 2; $i++){
            $player1[1][] = array_shift($deck);
            $player2[1][] = array_shift($deck);
            $player3[1][] = array_shift($deck);
            $player4[1][] = array_shift($deck);
            $player5[1][] = array_shift($deck);
            $bank[1][] = array_shift($deck);
        }
    ?>

    <div id="boardGame">
        <div id="boardPlayer1">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/img_JordiMarset.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player1[0].'</h2><br>';  

                //CONTAMOS LAS CARTAS Y SI TIENE MENOS DE 14 LE DAMOS UNA HASTA QUE TENGA MÁS DE 14
                do{
                    $valueHand1 = countPoints($player1);
                    if($valueHand1 < 14){
                        $player1[1][] = array_shift($deck);
                    }
                }while($valueHand1 < 14);
                
                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player1[1]); $i++){
                    echo '<div><img src="/img/cards/'.$player1[1][$i]['image'].'"> </div>';
                }
                
                //MOSTRAMOS LOS PUNTOS DE LA MANO
                echo '<h2>'.$valueHand1.'</h2><br>';
    
            ?>
        </div>
        <div id="boardPlayer2">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/dani.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player2[0].'</h2><br>';  

                //CONTAMOS LAS CARTAS Y SI TIENE MENOS DE 14 LE DAMOS UNA HASTA QUE TENGA MÁS DE 14
                do{
                    $valueHand2 = countPoints($player2);
                    if($valueHand2 < 14){
                        $player2[1][] = array_shift($deck);
                    }
                }while($valueHand2 < 14);
                
                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player2[1]); $i++){
                    echo '<div class="carta"><img src="/img/cards/'.$player2[1][$i]['image'].'"></div>';
                }

                //MOSTRAMOS LOS PUNTOS DE LA MANO
                echo '<h2>'.$valueHand2.'</h2><br>';
            ?>
        </div>
        <div id="boardPlayer3">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/alex.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player3[0].'</h2><br>';  

                //CONTAMOS LAS CARTAS Y SI TIENE MENOS DE 14 LE DAMOS UNA HASTA QUE TENGA MÁS DE 14
                do{
                    $valueHand3 = countPoints($player3);
                    if($valueHand3 < 14){
                        $player3[1][] = array_shift($deck);
                    }
                }while($valueHand3 < 14);
                
                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player3[1]); $i++){
                    echo '<div><img src="/img/cards/'.$player3[1][$i]['image'].'"> </div>';
                }

                //MOSTRAMOS LOS PUNTOS DE LA MANO
                echo '<h2>'.$valueHand3.'</h2><br>';
            ?>
        </div>
        <div id="boardPlayer4">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/liam.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player4[0].'</h2><br>';  

                //CONTAMOS LAS CARTAS Y SI TIENE MENOS DE 14 LE DAMOS UNA HASTA QUE TENGA MÁS DE 14
                do{
                    $valueHand4 = countPoints($player4);
                    if($valueHand4 < 14){
                        $player4[1][] = array_shift($deck);
                    }
                }while($valueHand4 < 14);

                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player4[1]); $i++){
                    echo '<div class="carta"><img src="/img/cards/'.$player4[1][$i]['image'].'"></div>';
                }

                //MOSTRAMOS LOS PUNTOS DE LA MANO
                echo '<h2>'.$valueHand4.'</h2><br>';
            ?>
        </div>
        <div id="boardPlayer5">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/lukas.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$player5[0].'</h2><br>';  

                //CONTAMOS LAS CARTAS Y SI TIENE MENOS DE 14 LE DAMOS UNA HASTA QUE TENGA MÁS DE 14
                do{
                    $valueHand5 = countPoints($player5);
                    if($valueHand5 < 14){
                        $player5[1][] = array_shift($deck);
                    }
                }while($valueHand5 < 14);
                
                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($player5[1]); $i++){
                    echo '<div><img src="/img/cards/'.$player5[1][$i]['image'].'"> </div>';
                }

                //MOSTRAMOS LOS PUNTOS DE LA MANO
                echo '<h2>'.$valueHand5.'</h2><br>';
            ?>
        </div>
        <div id="boardBank">
            <!-- CARGAMOS LA IMÁGEN DEL JUGADOR -->
            <img src="/img/img_JordiMarset.jpg" alt="Foto Jordi" class="fotoJugador">
            <?php
                //MOSTRAMOS NOMBRE JUGADOR Y SUS IMÁGENES DE LAS CARTAS
                echo '<h2>'.$bank[0].'</h2><br>';  

                //CONTAMOS LAS CARTAS Y SI TIENE MENOS DE 14 LE DAMOS UNA HASTA QUE TENGA MÁS DE 14
                do{
                    $valueHandBank = countPoints($bank);
                    if($valueHandBank < 14){
                        $bank[1][] = array_shift($deck);
                    }
                }while($valueHandBank < 14);
                
                //SACAMOS LAS IMAGENES
                for($i = 0; $i < count($bank[1]); $i++){
                    echo '<div class="carta"><img src="/img/cards/'.$bank[1][$i]['image'].'"></div>';
                }

                //MOSTRAMOS LOS PUNTOS DE LA MANO
                echo '<h2>'.$valueHandBank.'</h2><br>';
            ?>
        </div>
    </div>

    <div id="results">
        <?php
            //MOSTRAMOS LOS RESULTADOS POR PANTALLA
            echo '<h2 id="p1">'.$player1[0].' '.winner($valueHand1, $valueHandBank).'</h2>';
            echo '<h2 id="p2">'.$player2[0].' '.winner($valueHand2, $valueHandBank).'</h2>';
            echo '<h2 id="p3">'.$player3[0].' '.winner($valueHand3, $valueHandBank).'</h2>';
            echo '<h2 id="p4">'.$player4[0].' '.winner($valueHand4, $valueHandBank).'</h2>';
            echo '<h2 id="p5">'.$player5[0].' '.winner($valueHand5, $valueHandBank).'</h2>';
        ?>

    </div>


    <?php
        //INCLUIMOS EL FOOTER
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.inc.php');
    ?>
</body>
</html>