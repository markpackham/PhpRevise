<?php

function treeOutBranch($tree)
{
    $markup = '';
    //Branch is the Key and Twig is the value
    foreach ($tree as $branch => $twig) {
        $markup .= '<li>' . $branch . '</li>';
    }

    return '<ul>' . $markup . '</ul>';
}

function treeOutTwig($tree)
{
    $markup = '';
    //Branch is the Key and Twig is the value
    foreach ($tree as $branch => $twig) {
        $markup .= '<li>' . $twig . '</li>';
    }

    return '<ul>' . $markup . '</ul>';
}

function treeOut($tree)
{
    $markup = '';
    //We need to deal with keys and values
    foreach ($tree as $branch => $twig) {
        //Check if twig is an array so our output isn't just "Array"
        //We need to use recursion
        $markup .= '<li>' . ((is_array($twig)) ? $branch . treeOut($twig) : $twig) . '</li>';
    }

    return '<ul>' . $markup . '</ul>';
}