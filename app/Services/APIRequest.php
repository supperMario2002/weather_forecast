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
        $open_ai->setHeader(["Connection" => "keep-alive"]);
        // get prompt

        $prompt = " Với thông số sau 
        Nồng độ CO 847.82μg/m3
        Nồng độ NO 7.49μg/m3
        Nồng độ O3 45.42μg/m3
        Nồng độ SO2 30.28μg/m3
        Nồng độ PM10 67.56μg/m3
        Nồng độ NH3 6.71μg/m3
        Hãy đưa ra các 5 lời khuyên ngắn chính về bảo vệ sức khỏe con người?";

        header('Content-type: text/event-stream');
        header('Cache-Control: no-cache');
        $complete = $open_ai->completion([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'temperature' => 0.7,
            'max_tokens' => 1000,
            'top_p' => 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
            'stream' => true
        ], function ($curl_info, $data) {
            echo $data . " ";
            echo PHP_EOL;
            ob_flush();
            flush();
            return strlen($data);
        });
    }

}