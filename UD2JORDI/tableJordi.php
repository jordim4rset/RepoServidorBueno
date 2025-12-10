<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Jordi</title>
</head>
<body>
    <table border="1">
        <?php
            for($i = 0; $i <= 10; $i++){
                echo '<tr>';
                for($j = 0; $j <= 10; $j++){
                    echo '<td>';
                    if($i == 0 && $j == 0){
                        echo 'x';
                    }else if($i == 0) {
                        echo $j;
                    }else if($j == 0) {
                        echo $i;
                    }else {
                        echo $i*$j;
                    }
                    echo '</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>