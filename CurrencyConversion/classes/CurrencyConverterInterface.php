<?php

namespace MyConverter\Utilities;

//Its good to use an interface so we can user other APIs if https://free.currencyconverterapi.com/ fails
interface CurrencyConverterInterface
{
    public function convert(array $conversions);

    public function getCurrencies();
}