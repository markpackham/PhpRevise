<?php

require 'tree.php';

//Our pretend tree structure
$tree = array(
    'core' => array(
        'init.php'
    ),
    'classes' => array(
        'User.php',
        'Hash.php',
        'Sesson.php'
    ),
    'functions' => array(
        'security.php'
    ),
    'template' => array(
        'index.template.php',
        'includes' => array(
            'header.template.php',
            'footer.template.php'
        )
    ),
    'index.php',
    'login.php',
    'register.php'
);

echo treeOutBranch($tree);
/*outputs this which is just the keys
    core
    classes
    functions
    template
    0
    1
    2
*/
echo "<br><br>";
echo treeOutTwig($tree);
/*outputs values but struggles to deal with arrays
    Array
    Array
    Array
    Array
    index.php
    login.php
    register.php
*/

echo "<br><br>";
echo treeOut($tree);
/*outputs keys and their values, we need to use recursion to check if a twig is an array then dive deeper till we hit a value
    core
        init.php
    classes
        User.php
        Hash.php
        Sesson.php
    functions
        security.php
    template
        index.template.php
        includes
            header.template.php
            footer.template.php
    index.php
    login.php
    register.php
*/