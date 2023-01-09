<?php

class Movie {
    public $title;
    private $releaseYear;
    private $genre;
    public $author;

    public function __construct(string $_title, int $_releaseYear, string $_genre, string $_author){
        $this->title = $_title;
        $this->releaseYear = $_releaseYear;
        $this->gnere = $_genre;
        $this->author = $_author;

    }

    public function setTitle($_title){
        $this->title = $_title;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setGenre($_genre){
        $this->title = $_title;
    }
    public function getGenre(){
        return $this->genre;
    }
}   

$avatar = new Movie('Avatar', 2009, 'Fantascienza', 'James Cameron');
$glassOnion = new Movie('Glass Onion', 2022, 'Commedia', 'Rian Johnson');

var_dump($avatar, $glassOnion);
