<?= is shorthand for <?php echo.
PHP provides superglobals which can be accessed anywhere in the script.
$_GET is an associative array containing data from a GET request.
$_POST is an associative array containing data from a POST request.
$_REQUEST is an associative array containing data from both GET and POST requests. It should only be used if you don’t care which method was used.
The array keys in the PHP request superglobals are set by the name attributes in the HTML form, which need to be unique.
The action attribute is used to specify which file should handle data from the form request.