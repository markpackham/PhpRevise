<?php

namespace MyConverter\Utilities;

class CurrencyConverter implements CurrencyConverterInterface
{

    protected $currencyUrl = 'https://free.currencyconverterapi.com/api/v5';
    //we want to use %s as a token since our currency queries can change
    protected $convertEndpoint = 'convert?q=%s&compact=y';

    protected $currenciesEndpoint = 'currencies';
    //We get currencies from here https://free.currencyconverterapi.com/api/v5/currencies

    public function convert(array $conversions)
    {
        $query = '';
        $results = [];

        //array_map — Applies the callback to the elements of the given arrays
        //We need to use array_map since we aren't detailing with strings but the array $conversions
        $query = implode(',', array_map(function ($c) {
            return "{$c[0]}_{$c[1]}";
        }, $conversions));

        //var_dump($query);
        //Outputs string(15) "USD_GBP,GBP_USD"

        //Build up URL

        //sprintf — Return a formatted string
        $convertEndpoint = sprintf($this->convertEndpoint, $query);
        //echo $convertEndpoint; //convert?q=USD_GBP,GBP_USD&compact=y

        $url = "{$this->currencyUrl}/{$convertEndpoint}";
        //echo $url; //https://free.currencyconverterapi.com/api/v5/convert?q=USD_GBP,GBP_USD&compact=y

        //Get response, turn json into an array so we can work with it
        $reponse = json_decode($this->curlRequest($url), true);
        //var_dump($reponse); //array(2) { ["USD_GBP"]=> array(1) { ["val"]=> float(0.71702) } ["GBP_USD"]=> array(1) { ["val"]=> float(1.394661) } }

        //Build up results
        foreach ($conversions as $c) {
            $key = "$c[0]_$c[1]";
            $results[] = isset($reponse[$key]) ? $reponse[$key]['val'] * $c[2] : null;
        }

        return $results;

    }

    public function getCurrencies()
    {

        $url = "{$this->currencyUrl}/{$this->currenciesEndpoint}";

        return json_decode($this->curlRequest($url), true)['results'];

    }

    //This doesn't belong in the Interface since it isn't directly related to currency conversion
    protected function curlRequest($url)
    {
        //curl_init — Initialize a cURL session (Client URL Library)
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        return curl_exec($curl);
    }
}