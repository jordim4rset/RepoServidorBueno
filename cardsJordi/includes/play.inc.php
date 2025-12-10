
<?php
/**
 * play
 *
 * @param  mixed $deck
 * @param  mixed $player
 * @param  mixed $valueHand
 * @return void
 */
function play($deck, $player, $valueHand) {

    for($i = 0; $i < 2; $i++){
        $player[1][] = array_shift($deck);
    }

    $valueHand = 0;
    for($i = 0; $i < count($player[1]); $i++){
        $valueHand += $player[1][$i]['valueBlack'];
    }
    for($i = 0; $i < count($player[1]); $i++){
        if($player[1][$i]['label'] == '1' && $valueHand > 21){
            $valueHand -= 10;
        }
    }
    $exitValueHand = false;

    while($exitValueHand == false){
        if($valueHand < 14){
            $player[1][] = array_shift($deck);
            $valueHand = 0;
            for($i = 0; $i < count($player[1]); $i++){
                $valueHand += $player[1][$i]['valueBlack'];
            }
            for($i = 0; $i < count($player[1]); $i++){
                if($player[1][$i]['label'] == '1' && $valueHand > 21){
                    $valueHand -= 10;
                }
            }
        }else{
            $exitValueHand = true;
        }
    }

    return $valueHand;
}
