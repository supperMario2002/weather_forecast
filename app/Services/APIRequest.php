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
        Tốc độ gió 16.9Km/h
        Cảm giác như 30.3°C
        Mây 0%
        Lượng mưa 0.1mm
        Độ ẩm 58%
        Hướng gió 20°
        Tầm nhìn 10Km
        Gió giật 13Km/h
        Mặt trăng Waxing Gibbous
        Chỉ số UV 5
        Hãy đưa ra 5 lời khuyên về các hoạt động ngoài trời, các loại quần áo nên mặc, các hoạt động ngoài trời?";

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
            echo $data;
            echo PHP_EOL;
            ob_flush();
            flush();
            return strlen($data);
        });
    }

}