<?php
namespace App\classes;

class Exlample extends person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber =10;
    protected $secondNumber =20;
    private $lastNumber =30;

    public function index()
    {
        $this->firstName = "MD.";
        echo $this->firstName;
    }
    public function methodOne()
    {
        $this->middleName = 'Habibur';
        echo $this->middleName;
    }
    public function methodTwo()
    {
        $this->lastName ='Rahman';
        echo $this->lastName;
    }
    public function methodeThree()
    {
//        echo $this->distict;
//        echo $this->division;
//        echo $this->country;
//        $this->division();
//        $this->distict();
//        $this->country();
    }
}