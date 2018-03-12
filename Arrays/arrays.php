<?php

/*
 * Compares array1 against one or more other arrays and returns the values in array1 that are not present in any of the other arrays.
 * http://php.net/manual/en/function.array-diff.php
 */

$array1=array("a"=>"1","b"=>"2","c"=>"3","d"=>"4");
$array2=array("e"=>"1","f"=>"2","g"=>"30000");

$output=array_diff($array1,$array2);
print_r($output);
//Shows the first result array's differences
//Array ( [c] => 3 [d] => 4 )

echo '<br />';
//Outputs 4, size of and count are the same thing
echo count($array1);
echo '<br />';
echo sizeof($array1);
