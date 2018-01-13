<?php
//Count unique visitors
//This won't be reliable for global ip address or give reliable results for hub users
//You're better off using a database rather than a .txt file since the .txt will get huge
$filename = 'counter.txt';
$ip_filename = 'ip.txt';

function inc_count()
{
    //user's ip address
    $ip = $_SERVER['REMOTE_ADDR'];
    global $filename, $ip_filename;

    //We want to ignore new line line breaks
    //Only run if the ip address does not exist in ip.txt
    if (!in_array($ip, file($ip_filename, FILE_IGNORE_NEW_LINES))) {
        //if file doesn't exist set the current value to 0
        $current_value = (file_exists($filename)) ? file_get_contents($filename) : 0;

        //Write to ip.txt, we need FILE_APPEND so we add to the file rather than re-write over it
        // resulting in just 1 IP address
        file_put_contents($ip_filename, $ip."\n", FILE_APPEND);
        //put data into our counter file
        file_put_contents($filename, ++$current_value);
    }
}

inc_count();
// "Please check ip.txt for ip addresses and counter.txt to see the visitor count";
