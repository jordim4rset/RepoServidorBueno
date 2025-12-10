<?php
    $n1 = rand(1,9);
    $n2 = rand(1,9);

    echo $n1.'-'.$n2.' = '.$n1-$n2.'<br>';
    echo $n1.'+'.$n2.' = '.$n1+$n2.'<br>';
    echo $n1.'x'.$n2.' = '.$n1*$n2.'<br>';
    echo $n1.'/'.$n2.' = '.$n1/$n2.'<br>';
    echo $n1.'%'.$n2.' = '.$n1%$n2.'<br>';

    if($n1 == $n2){
        echo 'Los números son iguales';
    }else if($n1 < $n2){
        echo 'El número mayor es el '.$n2;
    }else{
        echo 'El número mayor es el '.$n1;
    }

    i