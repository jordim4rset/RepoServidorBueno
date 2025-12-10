<?php

class Anime {

    private string $title;
    private string $author;
    private int $year;
    private string $genre;
    private int $episodes;
    private array $characters = [];

    //CONSTRUCTOR
    public function __construct(string $title, string $author, string $genre, int $episodes, int $year = -1)
    {
        $this->title = $title;
        $this->author = $author;
        if($this->checkGenre($genre)){
            $this->genre = $genre;
        }else{
            $this->genre = 'desconocido';
        }
        $this->episodes = $episodes;
        if($this->checkYear($year)){
            $this->year = $year;
        }else{
            $this->year = -1;
        }
    }

    //MÉTODO MÁGICO GET
    public function __get ($property){
        return $this->$property;
    }

    //MÉTODO MÁGICO SET
    public function __set ($property, $value){
        return $this->$property = $value;
    }

    //MÉTODO COMPROBAR AÑO
    public function checkYear ($year): bool{
        if($year < 1917){
            return false;
        }
        return true;
    }

    //MÉTODO COMPROBAR GENERO
    public function checkGenre($genre): bool{
        switch(strtolower($genre))
        {
        case 'kodomo':
        case 'shonen':
        case 'shojo':
        case 'seinen':
        case 'josei':
            return true;
        }
        return false;
    }

    //MÉTODO COMPROBAR CHARACTER
    private function checkCharacter(Character $character):bool{
        foreach ($this->characters as $characterAUX) {
            if(strtolower($characterAUX->name) == strtolower($character->name)){
                return true;
            }
        }
        return false;
    }

    //MÉTODO AÑADIR CHARACTER
    public function addCharacter(Character $character){
        if(!$this->checkCharacter($character)){
            $this->characters[] = $character;
            return true;
        }
        return false;
    }

    //MÉTODO CONTAR CHARACTERS
    public function countCharacters():int{
        $count = 0;
        foreach($this->characters as $character){
            $count++;
        }
        return $count;
    }

    //MÉTODO ELIMINAR CHARACTER
    private function removeCharacter(Character $character):bool{
        if($this->checkCharacter($character)){
            foreach($this->characters as $key => $characterAUX){
                if(strtolower($characterAUX->name) == strtolower($character->name)){
                    unset($this->characters[$key]);
                    return true;
                }
            }
        }
        return false;
    }
}
?>