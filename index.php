<?php

require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('Europe/Athens');


use Monolog\Logger;                             //namespace
use Monolog\Handler\StreamHandler;

//$log = new Monolog\Logger('name'); // new monologLogger object in object variable
$log = new Logger('name'); //using the namespace
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING)); // use object operator to push handler where it has an object instanciated inside of it
$log->addWarning('Foo');

echo "Hello World";