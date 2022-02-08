<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;

if(isset($_GET['pages']))
{
    if($_GET['pages'] == 'full-name')
    {
        include 'pages/full-name.php';
    }
}
elseif (isset($_POST['btn']))
{
    $fullName = new FullName($_POST);
    $result = $fullName->getfullName();
    include 'pages/full-name.php';
}
