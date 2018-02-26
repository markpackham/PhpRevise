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