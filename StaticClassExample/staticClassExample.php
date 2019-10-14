<?php
class AdamsUtils
{
    public static $the_answer = 42;
    public static function addTowel($string)
    {
        return $string . " and a towel.";
    }
}

$items = "I brought apples";
echo AdamsUtils::$the_answer;
echo "\n";
echo AdamsUtils::addTowel($items);

// General notes on classes
/*
Classes are defined using the class keyword.
Functions defined within a class become methods and variables within the class are considered properties.
There are three levels of visibility for class members:
public (default) - accessible from outside of the class
protected - only accessible within the class or its descendants
private - only accessible within the defining class
Members can be defined to be static.
Static members are accessed using the Scope Resolution Operator (::).
Classes are instantiated into objects using the new keyword.
Members of an object are accessed using the Object Operator (->).
 */
