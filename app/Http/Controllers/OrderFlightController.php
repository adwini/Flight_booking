<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class OrderFlightController extends Controller
{
    public function __invoke (Request $request, Client $client)
    {
        $url = 'https://test.api.amadeus.com/v1/booking/flight-orders';
        if (session('PuMU9r1yHJHTttfZk4TeuFsGLH4A')) {
            $access_token = session('Ayuj4aiQX2rz0Gr8GJelC9g3LLkw');
        } else {
            $access_token = json_decode(app('App\Http\Controllers\AccessTokenController')->__invoke($client))->access_token;
            session(['PuMU9r1yHJHTttfZk4TeuFsGLH4A' => $access_token]);
        }


            $data = [
                'data' => [
                    'type' => 'flight-order',
                    'flightOffers' => [
                        json_decode($request['data'])
                    ],
                    'travelers' => [ ]
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
            return view('confirm')->with('flight', $response->data);
        } catch (GuzzleException $exception) {
            return $exception->getMessage();
        }

    }
}