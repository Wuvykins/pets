<?php
//Turn on error reporting
ini_set('display_errors' , 1);
error_reporting(E_ALL);

//Require
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {
    echo '<h1>Pet Home</h1>';
    //$view = new View;
    //echo $view->render('views/home-page.html');
});

//Run fat free
$f3->run();