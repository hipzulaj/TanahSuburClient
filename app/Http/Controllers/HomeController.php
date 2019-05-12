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
    $request = $this->client->get('http://localhost:8001/home');
    $response = $request->getBody()->getContents();
    $result = json_decode($response, true);
    // echo $response;

    $sensor = [
      'id' => $result['id'],
      'ec' => $result['ec_sensor'],
      'temp' => $result['temp_sensor'],
      'ph' => $result['ph_sensor'],
      'humid' => $result['humid_sensor'],
      'time' => $result['waktu_diambil']
    ];

    return ['sensor' => $sensor];
  }
}
