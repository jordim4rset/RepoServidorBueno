<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERATING JORDI</title>
</head>
<body>
    <ul>
        <?php
            for($i = 1; $i<=5; $i++){
                echo '<li><a href="#sec' .$i. '">Sección' .$i. '</a></li>';
            }
        ?>
    </ul>

    <!-- 
    <section>
        
        <?php
            /*
            for($i = 1; $i <= 5; $i++){
                echo '<article id="sec'.$i.'"><h1>Sección'.$i.'</h1></article>';
            }
                */
        ?>
        
    </section>
    -->

    <section>
        <article id="sec1">
            <h1>Negativo - Cero - Positivo</h1>
            
            <?php
                $num = rand(-200, 200);

                if($num === 0){
                    echo 'El número '.$num.' es cero.';
                }else if($num < 0){
                    echo 'El número '.$num.' es negativo.';
                }else {
                    echo 'El número '.$num.' es positivo.';
                }
                
            ?>
        </article>

        <article id="sec2">
            <h1>Nota</h1>
            
            <?php
                $mark = rand(0, 10);

                switch($mark)
                {
                case 0:
                case 1:
                case 2:
                    echo $mark.' insuficiente';
                    break;
                case 3:
                case 4:
                    echo $mark.' necesita mejorar';
                    break;
                case 5:
                    echo $mark.' aprobado justito';
                    break;
                case 6:
                    echo $mark.' aprobado';
                    break;
                case 7:
                    echo $mark.' notable bajo';
                    break;
                case 8:
                    echo $mark.' notable';
                    break;
                case 9:
                case 10:
                    echo $mark.' sobresaliente';
                    break;
                default:
                    echo $mark.' valor no valido';
                    break;
                }
            ?>
        </article>

        <article id="sec3">
            <h1>Tabla de multiplicar del 36</h1>

            <table border="1px">
                <?php
                    $num = rand(0, 100);
                    echo '<tr><th>x</th><th>'.$num.'</th></tr>';
                    for($i = 0; $i <= 20; $i++){
                        echo '<tr><th>'.$i.'</th><th>'.$i*$num.'</th></tr>';
                    }
                ?>
            </table>
        </article>

        <article id="sec4">
            <?php
                $num1 = rand(1,10);
                $num2 = rand(1,10);
                echo '<h1>Tabla de '.$num1.' filas y '.$num2.' columnas</h1>';
            ?>
            <table border="1">
                <?php
                    for($i = 0; $i < $num1; $i++){
                        echo '<tr>';
                            for($j = 0; $j < $num2; $j++){
                                echo '<th> '.$i.'x'.$j.' </th>';
                            }
                        echo '</tr>';
                    }
                ?>
            </table>
        </article>

        <article id="sec5">
            <h1>Calculo del cambio</h1>
            <?php
                
                $money = rand(1, 1000);

                echo 'El dinero total es de '.$money.'<br>';
                
                $b500 = intval($money/500);
                $money = $money % 500;
                $b200 = intval($money/200);
                $money = $money % 200;
                $b100 = intval($money/100);
                $money = $money % 100;
                $b50 = intval($money/50);
                $money = $money % 50;
                $b20 = intval($money/20);
                $money = $money % 20;
                $b10 = intval($money/10);
                $money = $money % 10;
                $b5 = intval($money/5);
                $money = $money % 5;
                $m2 = intval($money/2);
                $money = $money % 2;
                $m1 = intval($money/1);

                echo 'Billetes de 500: '.$b500.'<br>';
                echo 'Billetes de 200: '.$b200.'<br>';
                echo 'Billetes de 100: '.$b100.'<br>';
                echo 'Billetes de 50: '.$b50.'<br>';
                echo 'Billetes de 20: '.$b20.'<br>';
                echo 'Billetes de 10: '.$b10.'<br>';
                echo 'Billetes de 5: '.$b5.'<br>';
                echo 'Monedas de 2: '.$m2.'<br>';
                echo 'Monedas de 1: '.$m1.'<br>';
            ?>
        </article>

    </section>


</body>
</html>