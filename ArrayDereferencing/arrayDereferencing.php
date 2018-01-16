<?php

require_once 'something.php';

//Old way of doing things, have to always create a variable
$something = new Something();
$results = $something->results();
print_r($results);
//Prints Array ( [0] => Alex [1] => Billy [2] => Dale [3] => Ashley )
$first = $results[0];
echo "<br>";
//Prints Alex
echo $first;
echo "<br>";

//Modern way using php 5.4
$something = new Something();
$first = $something->results()[0];
print_r($first);
//Easier way to print Alex