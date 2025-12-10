<?php

class Character {
    private string $name;
    private int $age;
    private string $genre;
    private string $species;

    //CONSTRUCTOR
    public function __construct(string $name, string $genre, int $age = -1, string $species = 'humano'){
        $this->name = $name;
        $this->genre = $genre;
        if($this->checkAge($age) == false){
            $this->age = -1;
        }else{
            $this->age = $age;
        }

        if($this->checkSpecies($species) == false){
            $this->species = 'desconocida';
        }else{
            $this->species = $species;
        }
    }

    //MÉTODO MÁGICO GET
    public function __get ($property){
        return $this->$property;
    }

    //MÉTODO MÁGICO SET
    public function __set ($property, $value){

        if($this->$property == 'species'){
            if($this->checkSpecies($value)==false){
                return $this->$property = 'desconocida';
            }
        }
        return $this->$property = $value;
    }

    //FUNCIÓN COMPROBAR SPECIE
    public function checkSpecies(string $species):bool{
        for($i = 0; $i < strlen($species); $i++){
            if($species[$i] == 0 || $species[$i] == 1 || $species[$i] == 2 || $species[$i] == 3 || $species[$i] == 4 || $species[$i] == 5 || $species[$i] == 6 || $species[$i] == 7 || $species[$i] == 8 || $species[$i] == 9){
                return false;
            }
        }
        return true;
    }

    //FUNCIÓN COMPROBAR AGE
    public function checkAge(int $age):bool{
        if($age < 0){
            return false;
        }
        return true;
    }
}
?>