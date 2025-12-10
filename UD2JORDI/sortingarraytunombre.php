<?php
    $array = [];
    
    for($i = 0; $i < 10; $i++) {
        $array[$i] = rand(1, 1000);
        echo $array[$i].'<br>';
    }
    
    $min = $array[0];
    for($i = 0; $i < 10; $i++) {
        $ind = $i;
        for($j = $i+1; $j < 10; $j++){
            if($array[$j] < $array[$ind]) {
                $ind = $j;
            }
        }
        if($ind != $i){
            $aux = $array[$i];
            $array[$i] = $array[$ind];
            $array[$ind] = $aux;
        }
    }

    echo '<br>';

    foreach($array as $a){
        echo $a.'<br>';
    }

