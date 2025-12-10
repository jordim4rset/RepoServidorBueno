<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/anime.inc.php');
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/character.inc.php');
        $markEvans = new Character('Mark Ev4ns','masculino','humano','13');
        $inazuma = new Anime('Inazuma Eleven','Mark','Joseo','50','1');
        
        echo $inazuma->addCharacter($markEvans);
        
        $inazuma->year = 10;

        echo '<pre>';
        echo var_dump($inazuma);
        echo '</pre>';


        
        echo $inazuma->removeCharacter($markEvans);

        echo '<pre>';
        echo var_dump($inazuma);
        echo '</pre>';




    ?>
</body>
</html>