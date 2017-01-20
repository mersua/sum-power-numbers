<?php

//define root path
define( 'HOMEDIR', $_SERVER['DOCUMENT_ROOT'].'/' );

//include main part
require_once HOMEDIR . 'main/FindMaxPoint.php';
require_once HOMEDIR . 'main/FindSumNumbers.php';

$a = new FindMaxPoint(5);


echo "<pre>";
print_r($a->find());exit;