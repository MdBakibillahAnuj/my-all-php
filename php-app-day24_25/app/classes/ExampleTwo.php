<?php


namespace App\classes;


trait ExampleTwo
{
    public $arif = 'arif';
    protected $cr = 'Sudipto';
    protected $maruf = 'Maruf';
    private $mamun = 'Manun';

    public function santo()
    {
        echo 'Hello Santo';
    }
    public function cr()
    {
        echo 'Hello Sudipto';
    }
    public function maruf()
    {
        echo 'Hello Maruf';
    }
    public function mamun()
    {
        echo 'Hello Mamun';
    }
}