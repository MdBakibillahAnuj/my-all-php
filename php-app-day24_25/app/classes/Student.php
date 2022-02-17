<?php


namespace App\classes;
use App\classes\User;
use App\classes\InterfaceClass;
use App\classes\Example;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;

class Student extends ExampleOne implements InterfaceClass, Example
{
    use ExampleTwo;
    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name = 'BASIS';
        $this->city= 'SAVAR';
    }

    public function manage()
    {
//        echo $this->country;
//        echo $this->index();
//
//        echo  $this->helloTwo;
        echo $this->mamun();
    }
    public function one()
    {
        echo 'hello one';
    }
    public function two()
    {
        echo 'hello two';
    }
    public function three()
    {
        echo 'hello three';
    }
    public function helloFive()
    {
        // TODO: Implement helloFive() method.
        echo 'Hello Five';
    }
}