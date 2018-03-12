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
echo $removeØ.'<br />';