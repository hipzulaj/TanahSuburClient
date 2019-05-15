<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
  {
    $this->client = new \GuzzleHttp\Client();
  }

  public function index(){
    return view('index', $this->getSensorData());
  }

  public function getSensorData(){
    $cookie = 'apel';
    $request = $this->client->get('http://localhost:8001/getsensor/'.$cookie);
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
      'ec_status' => $sensor_result['ec_status'],
      'ph_status' => $sensor_result['ph_status'],
      'temp_status' => $sensor_result['temp_status'],
      'humid_status' => $sensor_result['humid_status'],
      'nilai' => 100
    ];
    // print_r($sensor);
    return ['sensor' => $sensor];
  }
}
