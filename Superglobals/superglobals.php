<?php

echo $_SERVER['PHP_SELF'].'<br />';
echo $_SERVER['REQUEST_TIME'].'<br />';
echo $_SERVER['SERVER_PORT'].'<br />';
echo $_SERVER['REMOTE_PORT'].'<br />';
echo $_SERVER['SERVER_NAME'].'<br />';
echo $_SERVER['SERVER_ADDR'].'<br />';
echo $_SERVER['HTTP_HOST'].'<br />';
echo $_SERVER['HTTP_REFERER'].'<br />';
echo $_SERVER['HTTP_USER_AGENT'].'<br />';
echo $_SERVER['SERVER_ADMIN'].'<br />';
echo $_SERVER['SCRIPT_NAME'];


/*Outputs on my machine

/PhpRevise/Superglobals/superglobals.php - filename of the currently executing script

80 -  port on the server machine being used by the web server for communication (usually 80)

1520937191 - timestamp of the start of the request

57545 - port being used on the user's machine to communicate with the web server

localhost - name of the host server

::1 - IP address of the host server

localhost - Host header from the current request

http://localhost/PhpRevise/Superglobals/ - complete URL of the current page

Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0 - Server and execution environment information

postmaster@localhost - value given to the server admin directive in the web server configuration file or value for the virtual host

/PhpRevise/Superglobals/superglobals.php - path of the current script
*/