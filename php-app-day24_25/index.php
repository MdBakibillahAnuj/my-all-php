<?php
//
//session_start();
//echo rand(10, 1000);
//
//echo session_id();

//$_SESSION['name'] = 'BITM';
//$_SESSION['city'] = 'Dhaka';
//$_SESSION['country'] = 'Bangladesh';



require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Student;

//$home =new Home();
//$home->index();
$student = new Student();
$student->manage();