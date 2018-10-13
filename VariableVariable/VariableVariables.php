<?php
/*
 * Learnt from http://php.net/manual/en/language.variables.variable.php
 * https://css-tricks.com/snippets/php/variable-variables/
 *
 * Sometimes it is convenient to be able to have variable variable names.
That is, a variable name which can be set and used dynamically.
A normal variable is set with a statement such as:
*/

$a  = 'hello';
$$a = 'world';
echo "${$a}";
//Outputs "world"
echo "<br />";
echo "$a ${$a}";
//Outputs "hello world"
echo "<br />";


$var0           = 'nameOfVariable';
$nameOfVariable = 'This is the value I want!';

echo $$var0;
//'This is the value I want!'

echo "<br />";

$var1           = 'var2';
$var2           = 'nameOfVariable';
$nameOfVariable = 'The value I want!';

//outputs "The value I want!"
echo $$$var1;

echo "<br />";

$var3 = 'nameOf';
$var4 = 'TheVariable';

$nameOfTheVariable = 'Another value I want!';

echo ${$var3 . $var4}; // Use concatenation to generate the variable name and then access it //
//outputs "Another value I want!"

?>
