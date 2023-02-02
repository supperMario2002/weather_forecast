<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index(){
        $client = new Client();
        $apiKey = "your_api_key";
        $response = $client->get('http://api.openweathermap.org/data/2.5/forecast?q=HaNoi&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi');
        $data = json_decode($response->getBody(), true);
        $dataWeatherForcast = $data['list'];
        $dataLocation = $data['city'];
        $currentDate = Carbon::now();
        // dd($data);
        return view('user.home', compact('dataWeatherForcast','dataLocation','currentDate'));
    }
}
