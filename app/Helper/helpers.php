<?php

$priceInEuro = $data->flightOffers[0]->price->total;
$priceInPHP = convertEuroToPHP($priceInEuro);

function convertEuroToPHP($amountInEuro) {
    $exchangeRate = 60.36; // exchange rate as of May 3, 2023
    $amountInPHP = $amountInEuro * $exchangeRate;
    return number_format($amountInPHP, 2); // format the result to 2 decimal places
}
