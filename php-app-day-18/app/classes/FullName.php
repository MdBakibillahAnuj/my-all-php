<?php

namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;

    public function __construct($data=null)
    {
        echo '<pre>';
//        print_r($data);

//        exit();
       if($data)
       {
           $this->firstName = $data['first_name'];
           $this->lastName = $data['last_name'];
       }
    }

    public function index()
    {
        header('Location: action.php?pages=full-name&&=b');
    }
    public function getFullName()
    {
        $this->getFullName = $this->firstName.' '.$this->lastName;
        echo $this->getFullName;
    }
}