<?php

$names = ['alex', 'billy', 'chuck', 'david'];
$numbers = [1, 2, 3, 4];

sort($names);
var_dump($names);
//array(4) { [0]=> string(4) "alex" [1]=> string(5) "billy" [2]=> string(5) "chuck" [3]=> string(5) "david" }

echo "<br>";
//Reverse sort
rsort($numbers);
var_dump($numbers);
//array(4) { [0]=> int(4) [1]=> int(3) [2]=> int(2) [3]=> int(1) }
echo "<br>";

$names = ['alex' => 1, 'billy' => 2, 'chuck' => 3, 'david' => 4];
sort($names);
var_dump($names);
//Keys like "alex" get lost array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) }
echo "<br>";

$names = ['alex' => 1, 'billy' => 2, 'chuck' => 3, 'david' => 4];
//Sort an array and maintain index association
asort($names);
var_dump($names);
//Keys are saved array(4) { ["alex"]=> int(1) ["billy"]=> int(2) ["chuck"]=> int(3) ["david"]=> int(4) }
echo "<br>";

$numbers = [5,4,3,2,1];
asort($numbers);
var_dump($numbers);
//Outputs array(5) { [4]=> int(1) [3]=> int(2) [2]=> int(3) [1]=> int(4) [0]=> int(5) }
//We are sorting by values and not keys

echo "<br>";
//ksort sorts by keys
$names = ['Zed' => 1, 'Bob' => 2, 'Alpha' => 3, 'Echo' => 4];
ksort($names);
var_dump($names);
//array(4) { ["Alpha"]=> int(3) ["Bob"]=> int(2) ["Echo"]=> int(4) ["Zed"]=> int(1) }

echo "<br>";
$files = ['img12.png','img10.png','img2.png','img1.png'];
sort($files);
var_dump($files);
//This is no good since we get array(4) { [0]=> string(8) "img1.png" [1]=> string(9) "img10.png" [2]=> string(9) "img12.png" [3]=> string(8) "img2.png" }
//We need to do a natural sort, natsort
echo "<br>";
$files = ['img12.png','img10.png','img2.png','img1.png'];
natsort($files);
var_dump($files);
echo "<br>";

/*Creating out own sort function via usort*/
$numbers = [1, 2, 3, 4];

usort($numbers, function ($first,$second){

});