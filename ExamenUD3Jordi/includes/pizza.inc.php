<?php

class Pizza{

    private string $name;
    private float $basePrice;
    private string $size;

    //CONSTRUCTOR
    public function __construct(string $name, float $basePrice, string $size = 'M'){
        $this->name = $name;
        $this->basePrice = $basePrice;
        $this->size = $this->checkSize($size);
    }

    //GETTER MÁGICO
    public function __get($property){
        return $this->$property;
    }

    //SETTER MÁGICO
    public function __set($property, $value){
        if($property == 'size'){
            $this->$property = $this->checkSize($value);
        }
        return $this->$property = $value;
    }

    //MÉTODO REVISAR TAMAÑO
    private function checkSize(String $sizeAUX):string{
        if($sizeAUX != 'S' && $sizeAUX != 'M' && $sizeAUX != 'L' && $sizeAUX != 'XL'){
            return 'M';
        }else{
            return $sizeAUX;
        }
    }
}
?>