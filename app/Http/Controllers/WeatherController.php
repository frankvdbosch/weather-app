<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function getWeather() {

        // API key
        $apiKey = config('app.weather_api_key');

        // Create a new Guzzle client instance
        $client = new Client();

        // API endpoint wiith location and units
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Amsterdam&units=metric&appid={$apiKey}";

        try {
            // Make a GEt request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            return view ('weather', ['weatherData' => $data]);
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return view('api_error', ['error' => $e->getMessage()]);
        }

    }
}
