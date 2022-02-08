<?php


namespace App\classes;


class Person
{
    public $distict;
    protected $division;
    private $country;

    public function distict()
    {
        echo 'Dhaka';
    }
    protected function division()
    {
        echo 'Dhaka';
    }
    private function country()
    {
        echo "Bangladesh";
    }
}