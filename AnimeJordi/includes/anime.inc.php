<?php

class Anime {
    private string $title;
    private string $author;
    private string $genre;
    private int $episodes;
    private array $characters = [];
    private int $year;

    public function __construct(string $title, string $author, string $genre, int $episodes, int $year = -1){
        $this->title = $title;
        $this->author = $author;
        //COMPROBACIÓN AÑO EN EL CONSTRUCTOR
        if($this->checkYear($year) == false){
            $this->year = -1;
        }else{
            $this->year = $year;
        }
        //COMPROBACIÓN GENERO EN EL CONTRUCTOR
        $this->genre = $this->checkGenre($genre);
        $this->episodes = $episodes;
    }


    //MÉTODO GETTER Y SETTER
    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $value){
        if($property == 'genre'){
            $this->$property = $this->checkGenre($value);
        }else{
            $this->$property = $value;
        }

        if($property == 'year'){  
            $this->$property = $this->checkYear($value);; 
        }else{
            $this->property = $value;
        }
    }

    //MÉTODO PARA COMPROBAR AÑO
    private function checkYear($year) {
        if($year >= 1917){
            return $year;
        }else {
            return -1;
        }
    }
    
    //MÉTODO PARA COMPROBAR GENRE
    private function checkGenre($genre): mixed{
        switch($genre)
        {
        case 'Kodomo':
        case 'Shonen':
        case 'Shojo':
        case 'Seinen':
        case 'Josei':
            return $genre;
        default:
            return 'Desconocido';
        }
    }

    //MÉTODO COMPROBAR SI EL CHARACTER ESTA EN EL ANIME
    private function checkCharacters(Character $character): bool {
        foreach($this->characters as $auxCharacter){
            if($auxCharacter->name == $character->name){
                return true;
            }
        }
        return false;
    }

    //MÉTODO AÑADIR CHARACTER AL ANIME
    public function addCharacter(Character $character): bool {
        if($this->checkCharacters($character) == true){
            return false;
        }
        $this->characters[] = $character;
        return true;
    }

    //MÉTODO ELIMINAR CARACTER AL ANIME
    public function removeCharacter(Character $character): bool {
        if($this->checkCharacters($character) == false){
            return false;
        }

        $cont = 0;
        foreach ($this->characters as $auxCharacter) {
            if($auxCharacter->name == $character->name){
                unset($this->characters[$cont]);
                $cont++;
            }
        }
        return true;
    }

    public function countCharacters(){
        $cont = 0;
        foreach($this->characters as $auxCharacter){
            $cont++;
        }
    }

}

