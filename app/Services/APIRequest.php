<?php

namespace App\Services;
use App\Services\ApiClient;
class APIRequest extends ApiClient
{
    protected $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }
    public function currentWeather($nameCyti) {
        return  $this->client->get('http://api.weatherapi.com/v1/current.json', [
            'key' => env('API_KEY_WEATHER'),
            'q' => $nameCyti,
            'lang' => 'vi',
        ]);
    }
    public function dayWeather($nameCyti){
        return  $this->client->get('http://api.weatherapi.com/v1/forecast.json', [
            'key' => env('API_KEY_WEATHER'),
            'q' => $nameCyti,
            'days' => 10,
            'lang' => 'vi',
        ]);
    }
    public function searchWeather(){
        
    }

    public function currentAir($lat, $lon){
        return $this->client->get('http://api.openweathermap.org/data/2.5/air_pollution', [
            'lat' => $lat,
            'lon' => $lon,
            'appid' => env('API_KEY_AIR'),
        ]);
    }

}
