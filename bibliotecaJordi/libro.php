<?php

class Book{
    //ATRIBUTOS DE CLASE
    private string $title;
    private string $author;
    private string $genre;
    private int $year;
    private bool $available;

    //CONSTRUCTOR
    public function __construct(string $title,string $author,string $genre,int $year,bool $available){
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->year = $year;
        $this->available = $available;
    }


    //GETTER Y SETTER MÁGICO
    public function __get($property){
        return $this->property;
    }

    public function __set($property, $value){
        $this->$property = $value;
    }

    //MÉTODO CLASICO
    public function isClassic():bool{
        if($year < 1980){
            return true;
        }
        return false;
    }
}