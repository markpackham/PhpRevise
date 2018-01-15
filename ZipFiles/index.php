<?php
require_once 'classes/zipper.php';

$zipper = new Zipper;
$zipper->add('files/one.txt');
$zipper->add(array('files/two.txt', 'files/three.txt'));

$zipper->store('files/zipped.zip');

echo "Visit the files folder to see the zipped file";