<?php


namespace App\classes;


class Example
{
    public $i=0;

    public function index()
    {
//        for ($this->i = 45; $this->i >22; $this->i--)
//        {
//            echo $this->i.'<br/>';
//        }
//
//        $this->i = 10;
//
//        while ($this->i < 20)
//        {
//            echo $this->i .'<br/>';
//            $this->i ++;
//        }
        $this->i = 10;
        do{
            echo $this->i.'<br/>';
            $this->i++;
        }while($this->i < 20);
    }
}