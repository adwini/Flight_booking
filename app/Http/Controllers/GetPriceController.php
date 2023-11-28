<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class GetPriceController extends Controller
{
    public function __invoke (Request $request, Client $client)
    {
       
        $url = 'https://test.api.amadeus.com/v1/shopping/flight-offers/pricing';
      
        if  (session('PuMU9r1yHJHTttfZk4TeuFsGLH4A')) {
            $access_token  =  session('PuMU9r1yHJHTttfZk4TeuFsGLH4A');
        }  else  {
            $access_token  = json_decode(app('App\Http\Controllers\AccessTokenController')->__invoke($client))->access_token;
            session(['PuMU9r1yHJHTttfZk4TeuFsGLH4A'  =>  $access_token]);
        }

        $data = [
            'data' => [
                'type' => 'flight-offers-pricing',
                'flightOffers' => [
                    json_decode($request['flight'])
                ]
            ]
        ];

                try {
                    $response = $client->post($url, [
                        'headers' => [
                            'Accept' => 'application/json',
                            'Authorization' => 'Bearer ' . $access_token
                        ],
                        'json' => $data
                    ]);
                    $response = $response->getBody();
                    $response = json_decode($response);
                    
                    // $totalPrice = $response->data->price->grandTotal;
                    // $convertedPrice = convertEuroToPHP($totalPrice);
                    // $response->data->price->grandTotalPHP = $convertedPrice;

                    return view('price')->with('data', $response->data);
                } catch (GuzzleException $exception) {
                    return $exception->getMessage();
         }
    }
}