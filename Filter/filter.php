<?php

// Check for valid email
$email = "valid.email@validEmail.com";

// validate the email
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
echo '<br /><br />';
$email = "john(.doe)@exa//mple.com";
echo "Unsanitized email, $email";
echo '<br />';
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo "Sanitized email, $email";
echo '<br /><br />';

$evilString = "<h2><span style='background-color:red;'>I am a <em>bad</em> scriptØØØØØØ</span></h2>";
echo $evilString;
//Strip tags santizing the string
$goodString = filter_var($evilString, FILTER_SANITIZE_STRING);
echo $goodString.'<br />';
//Get rid of ascii characters greater than 127
$removeØ = filter_var($evilString, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $removeØ.'<br /><br />';

//FILTER_SANITIZE_NUMBER_INT whole numbers, + and - only
$num="Before FILTER_SANITIZE_NUMBER_INT: 123++--332#()£$%&";
echo $num.'<br />';
$numFilter = filter_var($num, FILTER_SANITIZE_NUMBER_INT);
echo $numFilter.'<br /><br />';

//FILTER_SANITIZE_SPECIAL_CHARS, escape "<>& and characters with ASCII < 32
echo $specChars="This is <strong>strong</strong>, this is <em>emphasized</em>";
$specChars = filter_var($specChars,FILTER_SANITIZE_SPECIAL_CHARS);
echo '<br />'.$specChars;