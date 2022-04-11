<?php
header('Content-type: text/html; charset=utf-8');
require_once 'mallardduck.php';

$duck1 = new MallardDuck();
$duck1->display();
$duck1->performFly();
$duck1->swim();

?>