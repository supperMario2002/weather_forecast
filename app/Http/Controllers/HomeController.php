<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index(){
        $client = new Client();
        $apiKey = "your_api_key";
        // call api weather
        $response = $client->get('http://api.openweathermap.org/data/2.5/forecast?q=HaNoi&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi');
        $data = json_decode($response->getBody(), true);
        $dataWeatherForcast = $data['list'];
        $dataLocation = $data['city'];
        $currentDate = Carbon::now();
        // call api air
        $response_air = $client->get("http://api.openweathermap.org/data/2.5/air_pollution?lat=" . $dataLocation['coord']['lat'] . "&lon=" . $dataLocation['coord']['lat'] . "&appid=073f342f34bacc8898356a523fa5b4f8");
        $data2 = json_decode($response_air->getBody(), true);
        $dataAir = $data2['list'][0];
        if($dataAir['main']['aqi'] == 1 ){
            $dataAir['main']['aqi'] = "Chất lượng không khí được xem là đạt tiêu chuẩn, và ô nhiễm không khí coi như không hoặc gây rất ít nguy hiểm";
            array_push($dataAir['main'], "#009966");
        }
        if($dataAir['main']['aqi'] == 2 ){
            $dataAir['main']['aqi'] = "Chất lượng không khí ở mức chấp nhận được; tuy nhiên, một số chất gây ô nhiễm có thể ảnh hưởng tới sức khỏe của một số ít những người nhạy cảm với không khí bị ô nhiễm.";
            array_push($dataAir['main'], "#ffde33");
        }
        if($dataAir['main']['aqi'] == 3 ){
            $dataAir['main']['aqi'] = "Nhóm người nhạy cảm có thể chịu ảnh hưởng sức khỏe. Số đông không có nguy cơ bị tác động.";
            array_push($dataAir['main'], "#ff9933");
        }
        if($dataAir['main']['aqi'] == 4 ){
            $dataAir['main']['aqi'] = "Mỗi người đều có thể sẽ chịu tác động đến sức khỏe; nhóm người nhạy cảm có thể bị ảnh hưởng nghiêm trọng hơn.";
            array_push($dataAir['main'], "#cc0033");
        }
        if($dataAir['main']['aqi'] == 5 ){
            $dataAir['main']['aqi'] = "Cảnh báo nguy hại sức khỏe nghiêm trọng. Đa số mọi người đều bị ảnh hưởng.";
            array_push($dataAir['main'], "#7e0023");
        }
        dd($data2);
        return view('user.home', compact('dataWeatherForcast','dataLocation','currentDate','dataAir'));


    }
}
