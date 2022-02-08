<?php


namespace App\classes;


use mysql_xdevapi\Statement;

class Operator
{
//    :::::::::::::Operator::::::::::
/*
    *Arithmatic Operator
       * Binary Operator(+,-,*,/,%)
       * Unary Operator(++,--,(-))
    *Assignment Operator(=,+=/*=,/=,%=,.=)
    *Conditional Operator(>,<=,<,<=,==,!=,===,!==)
 *  *Logical Operator (&&,||,!)
 */
    public $x;
    public $y;
    protected $z;

    public function index()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

//        :::::::Statement::::::::

        /*
         * Single Line Statement
         * Conditional Statement
            * if
            * if else
            * switch
         * Repeated Statement
            * FOR
            * WHILE
            * DO WHILE
            * FOREACH
         * Array
         */


        switch ($this->y)
        {
            case 10:
                echo  "Hello World";
                break;
            case 20:
                echo "Hello BITM";
                echo "Hello BITM";
                echo "Hello BITM";
                echo "Hello BITM";
                echo "Hello BITM";
                echo "Hello BITM";
                break;

            case 30:
                echo "Hello Bangladesh";
                break;

            default:
                echo 'BYE';
        }



//        ::::::::::::::: Statement ::::::::::::::

//        if($this->x > $this->y)
//        {
//            echo 'Hello BITM';
//        }
//        elseif ($this->z >$this->y)
//        {
//            echo 'This Is Ok';
//        }
//        elseif ($this->y > $this->z)
//        {
//            echo "Hello Dhaka";
//        }
//        else {
//            echo "BYE";
//        }
//
//        if($this->x < $this->y)
//        {
//            echo 'Its True';
//        } else {
//            echo "Its False";
//        }


//
//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>........<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>........<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>........<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>........<br/>';


//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';
//        echo $this->x = $this->y;

//        echo -$this->x;

//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';
    }
}