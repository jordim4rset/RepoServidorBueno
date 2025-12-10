<?php
class Customer{

    private string $name;
    private bool $member;

    //CONSTRUCTOR
    public function __construct(string $name, bool $member = false){
        $this->name = $name;
        $this->member = $member;
    }
    
    //GETTER MÁGICO
    public function __get($property){
        return $this->$property;
    }

    //SETTER MÁGICO
    public function __set($property, $value){
        return $this->$property = $value;
    }
}

?>