<?php

class Artist{
    private string $name;
    private string $nationality;
    private int $birth_year;

    //CONSTRUCTOR
    public function __construct(string $name, string $nationality, int $birth_year)
    {
        $this->name = $name;
        //COMPROBACIÓN NACIONALIDAD EN EL CONSTRUCTOR
        if(!$this->checkNacionality($this->nationality)){
            $this->nationality = 'desconocida';
        }else{
            $this->nationality = $nationality;
        }

        //COMPROBACIÓN AÑO NACIMIENTO EN EL CONSTRUCTOR
        if(!$this->checkBirthYear($this->birth_year)){
            $this->birth_year = -1;
        }else{
            $this->birth_year = $birth_year;
        }
    }

    //MÉTODO SET MÁGICO
    public function __set($property, $value){
        switch($property)
        {
            case 'birth_year':
                if(!$this->checkBirthYear($value)){
                    return $this->$property = -1;
                }
            case 'nationality':
                if(!$this->checkNacionality($value)){
                    return $this->$property = 'desconocida';
                }
        }
        return $this->$property = $value;
    }

    //MÉTODO GET MÁGICO
    public function __get($property){
        return $this->$property;
    }

    private function checkBirthYear($birth_Year):bool{
        if($birth_Year < 1000){
            return false;
        }
        return true;
    }

    private function checkNacionality($nacionality):bool{
        for($i = 0; $i < strlen($nacionality); $i++){
            if($nacionality[$i] == 0 || $nacionality[$i] == 1 || $nacionality[$i] == 2 || $nacionality[$i] == 3 || $nacionality[$i] == 4 || $nacionality[$i] == 5 || $nacionality[$i] == 6 || $nacionality[$i] == 7 || $nacionality[$i] == 8 || $nacionality[$i] == 9){
                return false;
            }
        }
        return true;
    }
}





?>