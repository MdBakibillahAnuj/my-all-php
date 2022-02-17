<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello = "Arif";
    public $helloOne = "Tusher";
    public $helloTwo = "Santo";

    public function helloFour()
    {
        echo 'Hello Four';
    }
    abstract function helloFive();

}