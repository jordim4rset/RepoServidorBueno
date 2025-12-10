<?php

    /**
     *  createDeck
     *  @author Jordi Marset Tortosa
     *  @version 25-09-2025
     *  @return void
    */

function createDeck() {
    $suits = [
        'hearts'   => 'cor',
        'clubs'    => 'tre',
        'diamonds' => 'rom',
        'spades'   => 'pic'
    ];
    
    //RELACIONAMOS ENTRE LA ETIQUETA Y EL VALOR REAL DE LA CARTA PARA HIGHER OR LOWER
    $values = [
        '1'  => '1',
        '2'  => '2',
        '3'  => '3',
        '4'  => '4',
        '5'  => '5',
        '6'  => '6',
        '7'  => '7',
        '8'  => '8',
        '9'  => '9',
        '10' => '10',
        'J'  => '11',
        'Q'  => '12',
        'K'  => '13'
    ];

    //CREAMOS UN VALUE DIFERENTE PARA PODER UTILIZARLO PARA EL JUEGO DE BLACKJACK
    $valueBlack = [
        '1'  => '11',
        '2'  => '2',
        '3'  => '3',
        '4'  => '4',
        '5'  => '5',
        '6'  => '6',
        '7'  => '7',
        '8'  => '8',
        '9'  => '9',
        '10' => '10',
        'J'  => '10',
        'Q'  => '10',
        'K'  => '10'
    ];
    
    $deck = [];

    foreach ($suits as $suitName => $imagePrefix) {
        foreach ($values as $label => $number) {
            $deck[] = [
                'suit'  => $suitName,
                'value' => $number,
                'valueBlack' => $valueBlack[$label]??null,                  
                'label' => $label,                   
                'image' => $imagePrefix . '_' . $label . '.png' 
            ];
        }
    }

    $deck[] = ['suit' => 'joker', 'value' => 0, 'label' => 'Joker', 'image' => 'jok_1.png'];
    $deck[] = ['suit' => 'joker', 'value' => 0, 'label' => 'Joker', 'image' => 'jok_2.png'];

    return $deck;
}

