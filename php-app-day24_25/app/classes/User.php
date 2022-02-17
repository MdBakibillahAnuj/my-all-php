<?php


namespace App\classes;


class User
{
    protected $name = 'BITM';
    protected $city = 'DHAKA';

    public function index()
    {
        echo "Institute Name is $this->name & city is $this->city";
    }
}