<?php
//Notice classes files begin with a capital letter
require_once 'classes/Zipper.php';

$zipper = new Zipper;
$zipper->add('files/one.txt');
//NonExistantFile.txt will be ignored
$zipper->add('files/NonExistantFile.txt');
$zipper->add(array('files/two.txt', 'files/three.txt'));

$zipper->store('files/zipped.zip');

echo "<br><br>Visit the files folder to see the zipped file";