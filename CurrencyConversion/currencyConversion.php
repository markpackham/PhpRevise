<?php

require 'classes/CurrencyConverterInterface.php';
require 'classes/CurrencyConverter.php';

$converter = new MyConverter\Utilities\CurrencyConverter;

$converted = $converter->convert(
    [
        ['USD', 'GBP', 20.00],
        ['USD', 'GBP', 21.00],
        ['USD', 'GBP', 22.00],
        ['USD', 'GBP', 23.00],
        ['USD', 'GBP', 24.00],
        ['USD', 'GBP', 25.00],
        ['GBP', 'USD', 100]
    ]
);

var_dump($converted);
//You get something like array(7) { [0]=> float(14.3232) [1]=> float(15.03936) [2]=> float(15.75552) [3]=> float(16.47168) [4]=> float(17.18784) [5]=> float(17.904) [6]=> float(139.655) } 


//$currencies = $converter->getCurrencies();