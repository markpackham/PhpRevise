<?php

function createSEOUrl($url)
{
    //remove anything that isn't a letter, number, space or hyphen
    //Then remove spaces and duplicate hypens
    //Finally trim left and right removing left over hyphens, we don't want "google.com-"

    //The u is for unicode
    $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
    $spacesDuplicateHyphens = '/[\-\s]+/';

    $url = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($url));
    // from "Hello world of me â, ê---!!!!!" we now get "hello world of me â ê---"
    $url = preg_replace($spacesDuplicateHyphens, '-', $url);
    //now we get "hello-world-of-me-â-ê-"
    $url = trim($url,'-');
    //we've cut off the end hypen so we get  hello-world-of-me-â-ê

    return $url;
}