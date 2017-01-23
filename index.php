<?php

//define root path
define( 'HOMEDIR', $_SERVER['DOCUMENT_ROOT'].'/' );

//include main part
require_once HOMEDIR . 'main/AbstractNumbers.php';
require_once HOMEDIR . 'main/FindMaxPoint.php';
require_once HOMEDIR . 'main/FindSumNumbers.php';

// create object with power = 5
$nums = new FindSumNumbers(5);

// sum of all numbers
echo "<pre>";
var_dump($nums->findSum());
echo "</pre>";

// array of all numbers
echo "<pre>";
var_dump($nums->findArrayNumbers());exit;
echo "</pre>";