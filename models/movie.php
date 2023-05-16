<?php

class Movie
{
    public $title;
    public $genere;
    public $year;
    function __construct($_title, $_genere, $_year)
    {
        $this->title = $_title;
        $this->genere = $_genere;
        $this->year = $_year;
    }
    public function printTitle()
    {
        return "{$this->title}";
    }
    public function printYear()
    {
        return "{$this->year}";
    }
    public function printGenere()
    {
        return implode(', ', $this->genere);
    }
}
