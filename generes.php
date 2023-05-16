<?php
class Generes
{
    public $generesArray = [];
    function __construct($_generesArray)
    {
        $this->generesArray = $_generesArray;
    }
    public function printGenere()
    {
        return implode(', ', $this->generesArray);
    }
};
