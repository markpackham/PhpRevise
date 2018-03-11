<?php

echo 'Value passing<br />';

$number1 = 1;
$number2 = 2;

//Pass by value is the default
function addVal($num1, $num2){
    $num1 = 100;
    echo ($num1+$num2).'<br />';
}

addVal($number1, $number2);
addVal($number1, $number2);

echo $number1.'<br />';
echo '<br >Reference passing<br />';

/*
Results
102
102
1
 */


$number1 = 1;
$number2 = 2;

//Pass by reference on num1 thanks to &
function addRef(&$num1, $num2){
    $num1 = 100;
    echo ($num1+$num2).'<br />';
}

addRef($number1, $number2);
addRef($number1, $number2);

echo $number1.'<br />';

/*
Results
102
102
100
 */

echo '<br />Value passing<br />';

$myArray = [1,2,3];

echo 'First item is array before functions '.$myArray[0].'<br />';

function setArrayFirstItemToZero($myArray){
    $myArray[0]=0;
}
setArrayFirstItemToZero($myArray);
//We still get 1 as the first array number in [1,2,3]

echo 'Setting by Value gives no change '.$myArray[0].'<br />';

echo '<br />Reference passing<br />';

$myArray = [1,2,3];

function setArrayFirstItemToZeroRef(&$myArray){
    $myArray[0]=0;
}

setArrayFirstItemToZeroRef($myArray);

echo 'Setting by Ref gives change '.$myArray[0].'<br />';
//Changes first array item to 0