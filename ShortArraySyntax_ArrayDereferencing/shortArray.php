<?php

/*
 * Old ugly way is $letters = array('','','');
 */

$letters = ['a','b','c'];

function returnItems(){
    return ['swords','axes'];
}

/*
 * Old way
 * $items = returnItems();
 * echo $items[0];
 */

//Modern way
//$items = returnItems()[0];
//or
echo returnItems()[1];