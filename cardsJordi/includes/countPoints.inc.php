<?php
    /**
     * countPoints
     *  @author Jordi Marset Tortosa
     *  @version 25-09-2025
     *  @param  mixed $player
     *  @return void
     */
    function countPoints($player){
        $valueHand = 0;
        for($i = 0; $i < count($player[1]); $i++){
            $valueHand += $player[1][$i]['valueBlack'];
        }
        for($i = 0; $i < count($player[1]); $i++){
            if($player[1][$i]['label'] == '1' && $valueHand > 21){
                $valueHand -= 10;
            }
        }
        return $valueHand;
    }