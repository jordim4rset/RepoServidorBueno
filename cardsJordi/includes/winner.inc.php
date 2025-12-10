<?php
    /**
     * winner
     *
     * @param  mixed $valueHand
     * @param  mixed $valueHandBank
     * @return void
     */
function winner($valueHand, $valueHandBank){
    
    if($valueHand > 21){
        return 'pierde';
    }else if($valueHand < $valueHandBank && $valueHandBank > 21){
        return 'gana';
    }else if($valueHand < $valueHandBank){
        return 'pierde';
    }else if($valueHand == $valueHandBank){
        return 'empate';
    }else if($valueHand > $valueHandBank){
        return 'gana';
    }
}