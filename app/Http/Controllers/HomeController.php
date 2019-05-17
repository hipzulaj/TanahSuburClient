<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SettingsController;

class HomeController extends Controller
{
    public function __construct()
  {
    $this->client = new \GuzzleHttp\Client();
  }

  public function index(Request $request){
    $tanaman = $request->cookie('dipilih');
    if($tanaman == ''){
      // echo 'a';
      return redirect()->action('SettingsController@index');
    }
    else{
      return view('index', $this->getSensorData($tanaman));
    }
  }

  public function getSensorData($tanaman){
    $request = $this->client->get('http://localhost:8001/getsensor/'.$tanaman);
    $response = $request->getBody()->getContents();
    $sensor_result = json_decode($response, true);
    // echo $response;

    $sensor = [
      'id' => $sensor_result['id'],
      'ec' => $sensor_result['ec'],
      'temp' => $sensor_result['temp'],
      'ph' => $sensor_result['ph'],
      'humid' => $sensor_result['humid'],
      'time' => $sensor_result['time'],
      'batas_bawah_ec' => $sensor_result['batas_bawah_ec'],
      'batas_atas_ec' => $sensor_result['batas_atas_ec'],
      'batas_bawah_ph' => $sensor_result['batas_bawah_ph'],
      'batas_atas_ph' => $sensor_result['batas_atas_ph'],
      'batas_bawah_temp' => $sensor_result['batas_bawah_temp'],
      'batas_atas_temp' => $sensor_result['batas_atas_temp'],
      'batas_bawah_humid' => $sensor_result['batas_bawah_humid'],
      'batas_atas_humid' => $sensor_result['batas_atas_humid'],
      'ec_status' => $sensor_result['ec_status'],
      'ph_status' => $sensor_result['ph_status'],
      'temp_status' => $sensor_result['temp_status'],
      'humid_status' => $sensor_result['humid_status'],
      'tanaman' => $tanaman,
      'nilai' => $sensor_result['nilai']
    ];
    // print_r($sensor);
    return ['sensor' => $sensor];
  }
}
