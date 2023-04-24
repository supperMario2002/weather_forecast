<?php

namespace App\Services;

use App\Services\ApiClient;
use Orhanerday\OpenAi\OpenAi;

class APIRequest extends ApiClient
{
    protected $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }
    public function currentWeather($nameCyti)
    {
        return $this->client->get('http://api.weatherapi.com/v1/current.json', [
            'key' => env('API_KEY_WEATHER'),
            'q' => $nameCyti,
            'lang' => 'vi',
        ]);
    }
    public function dayWeather($nameCyti)
    {
        return $this->client->get('http://api.weatherapi.com/v1/forecast.json', [
            'key' => env('API_KEY_WEATHER'),
            'q' => $nameCyti,
            'days' => 7,
            'lang' => 'vi',
        ]);
    }


    public function currentAir($lat, $lon)
    {
        return $this->client->get('http://api.openweathermap.org/data/2.5/air_pollution', [
            'lat' => $lat,
            'lon' => $lon,
            'appid' => env('API_KEY_AIR'),
        ]);
    }

    public function gpt()
    {
        $open_ai = new OpenAi(env('API_KEY_GPT'));
        // $open_ai->setBaseURL("https://api.openai.com/v1/chat/completions");
        $open_ai->setHeader(["Connection"=>"keep-alive"]);
        // get prompt

        $prompt = "Với thông số sau:  
        - Nồng độ CO: 1108.17μg/m3
        - Nồng độ NO: 0.61μg/m3
        - Nồng độ O3: 311.85μg/m3
        - Nồng độ SO2: 30.99μg/m3
        - Nồng độ PM10: 147.12μg/m3
        - Nồng độ NH3: 11.02μg/m3
        Hãy đưa ra các 5 lời khuyên ngắn chính về bảo vệ sức khỏe con người?";

        $complete = $open_ai->completion([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'temperature' => 0.7,
            'max_tokens' => 256,
            'top_p' => 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,  
        ] );
        return json_decode($complete)->choices[0]->text;
    }

}