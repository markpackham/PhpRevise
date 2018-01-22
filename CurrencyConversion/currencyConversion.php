<?php

require 'classes/CurrencyConverterInterface.php';
require 'classes/CurrencyConverter.php';

$converter = new MyConverter\Utilities\CurrencyConverter;

$converted = $converter->convert(
    [
        ['USD', 'GBP', 20.00],
        ['GBP', 'USD', 100]
    ]
);

$currencies = $converter->getCurrencies();