<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/anime.php');
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/character.php');

        $got = new Anime('Juego de tronos','antonio recio','josei',80,1999);
        $johnstark = new Character('john','masculino',30,'humano');
        $david = new Character('david','masculino',50,'humano');


        $got->addCharacter($johnstark);
        $got->addCharacter($david);

        echo '<pre>';
        echo var_dump($got);
        echo '</pre>';

        echo '<div>';
        echo '<h2>'.$got->title.' - Genero: '.$got->genre.'</h2>';
        echo '<p>Autor: '.$got->author.'</p>';
        echo '<p>'.$got->episodes.' episodios</p>';
        echo '<h3>PERSONOJES</h3>';
        echo '<ul>';
        foreach($got->characters as $key => $character){
            echo '<li>'.$character->name.'</li>';
        }
        echo '</ul>';
        echo '</div>';
    ?>
</body>
</html>