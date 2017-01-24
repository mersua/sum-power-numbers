<?php

set_time_limit(0);

//define root path
define( 'HOMEDIR', $_SERVER['DOCUMENT_ROOT'].'/' );

//include main part
require_once HOMEDIR . 'main/AbstractNumbers.php';
require_once HOMEDIR . 'main/FindMaxPoint.php';
require_once HOMEDIR . 'main/FindSumNumbers.php';

// create object with power = 5
$nums = new FindSumNumbers(6);

// array of all numbers
echo "<pre>";
var_dump($nums->findArrayNumbers());
echo "</pre>";

// sum of all numbers
echo "<pre>";
var_dump($nums->findSum());
echo "</pre>";