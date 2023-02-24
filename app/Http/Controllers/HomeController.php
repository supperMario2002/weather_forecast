<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Services\APIRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(APIRequest $apiWeather, Request $request){
        if($request->ajax()){
            $key = $request->keySearch;
            return $apiWeather->currentWeather($key);
        }
        $slugLocation = 'ha-noi';
        $nameLocation = " Hà Nội";
        if($request->search_request!=null){
            $nameLocation = $request->search_name;
            $slugLocation = $request->search_request;
        }
        $dataWeather = $apiWeather->dayWeather($slugLocation);
        $dataLocation = $dataWeather['location'];
        $dataCurrent = $dataWeather['current'];
        $dataForecast = $dataWeather['forecast']['forecastday'];
        // dd($dataLocation);

        $currentDate = Carbon::now();
        // call api air
        $data2 = $apiWeather->currentAir($dataLocation['lat'], $dataLocation['lon']);
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
        return view('user.home', compact('dataCurrent','dataLocation','dataForecast', 'currentDate','dataAir','nameLocation'));
    }
}
