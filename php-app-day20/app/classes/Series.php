<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $type;
    protected $i;
    protected $result;

    public function __construct($data=null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->startingNumber = $data['ending_number'];
    }

    public function index()
    {
        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.' ';
        }

        for($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
}