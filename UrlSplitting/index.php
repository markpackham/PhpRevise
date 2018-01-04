<?php

$url = 'https://remnantnewspaper.com:9999/web/index.php/1?test=abc#top';

$parsedUrl = parse_url($url);

echo '<pre>'.print_r($parsedUrl,true).'</pre>';

/*
 * Outputs
 *
 * Array
(
    [scheme] => https
    [host] => remnantnewspaper.com
    [port] => 9999
    [path] => /web/index.php/1
    [query] => test=abc
    [fragment] => top
)
 */


$path = explode('/',$parsedUrl['path']);

print_r($path);