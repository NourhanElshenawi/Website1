<?php

require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('Europe/Athens');


use Monolog\Logger;                             //namespace
use Monolog\Handler\StreamHandler;

//$log = new Monolog\Logger('name'); // new monologLogger object in object variable
//$log = new Logger('name'); //using the namespace
//$log->pushHandler(new StreamHandler('app.log', Logger::WARNING)); // use object operator to push handler where it has an object instanciated inside of it
//$log->addWarning('Foo');


// Create and configure Slim app
//$app = new \Slim\App;   //version 3
$app = new \Slim\Slim();// new app object variable  slim instance dont remove
// Define app routes

//$app->get('/hello/{name}', function ($request, $response, $args) {
//    return $response->write("Hello " . $args['name']);
//});

$app->get('/hello/:name', function($name){
    echo "Hello, $name";
});


// Run app http get, basic structure

$app->get('/', function() use($app){
//    echo 'Hello, this is the homepage.';
        $app->render('index.html');
});     // arg 1 url expecting to get, home. arg2 closure to use functionality


$app->get('/contact', function() use($app){
    echo 'Feel free to  contact us.';
//        $app->render('index.html');

});




$app->run(); //dont remove