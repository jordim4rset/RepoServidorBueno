<?php

class Character {
    private string $name;
    private string $genre;
    private string $species;
    private int $age;

    //CONSTRUCTOR
    public function __construct(string $name, string $genre, string $species = 'humano', int $age = -1){
        $this->name = $name;
        $this->genre = $genre;
        if($this->checkSpecies($species) == false) {
            $this->species = 'humano';
        }else {
            $this->species = $species;
        }

        if($this->checkAge($age) == false) {
            $this->age = -1;
        }else{
            $this->age = $age;
        }
    }

    //MÉTODO PARA COMPROBAR EDAD
    public function checkAge(int $age): bool{
        if($age > 0){
            return true;
        }else {
            return false;
        }
    }

    //MÉTODO PARA COMPROBAR ESPECIE
    public function checkSpecies(string $species): bool {
        for($i = 0; $i < strlen($species); $i++) {
            if($species[$i] == 0 || $species[$i] == 1 || $species[$i] == 2 || $species[$i] == 3 || $species[$i] == 4 || $species[$i] == 5 || $species[$i] == 6 || $species[$i] == 7 || $species[$i] == 8 || $species[$i] == 9){
                return false;
            }
        }
        return true;
    }

    //GETTERS Y SETTERS MÁGICOS
    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value){
        //COMPROBACIÓN EDAD
        if($property == 'age'){
            if($this->checkAge($value) == false){
                $this->$property = -1;
            }else{
                $this->$property = $value;
            }
        }else{
            $this->$property = $value;
        }

        //COMPROBACIÓN ESPECIE
        if($property == 'species'){
            if($this->checkSpecies($value) == false){
                $this->$property = 'desconocida';
            }else{
                $this->$property = $value;
            }
        }else{
            $this->$property = $value;
        }
        
    }
}