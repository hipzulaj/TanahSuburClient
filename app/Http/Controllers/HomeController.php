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

  public function getIndicator(){
    $cookie = 'Apel';
    $requestIndicator = $this->client->get('http://localhost:8001/getIndicator/'.$cookie);
    $responseIndicator = $requestIndicator->getBody()->getContents();
    $indicator_result = json_decode($responseIndicator, true);
    // echo $responseIndicator;
    // echo $indicator_result['id'];
    return $indicator_result;
  }

  public function getSensorData(){
    $request = $this->client->get('http://localhost:8001/home');
    $response = $request->getBody()->getContents();
    $sensor_result = json_decode($response, true);
    // echo $response;

    $sensor = [
      'id' => $sensor_result['id'],
      'ec' => $sensor_result['ec_sensor'],
      'temp' => $sensor_result['temp_sensor'],
      'ph' => $sensor_result['ph_sensor'],
      'humid' => $sensor_result['humid_sensor'],
      'time' => $sensor_result['waktu_diambil'],
      'ec_status' => 'OK',
      'ph_status' => 'OK',
      'temp_status' => 'OK',
      'humid_status' => 'OK'
    ];

    $indicator = $this->getIndicator();

    if($sensor_result['ec_sensor'] < $indicator['0']['batas_bawah_ec'] || $sensor_result['ec_sensor'] > $indicator['0']['batas_atas_ec']){
      $sensor['ec_status'] = 'Not OK';
    }
    if($sensor_result['ph_sensor'] < $indicator['0']['batas_bawah_ph'] || $sensor_result['ph_sensor'] > $indicator['0']['batas_atas_ph']){
      $sensor['ph_status'] = 'Not OK';
    }
    if($sensor_result['temp_sensor'] < $indicator['0']['batas_bawah_temp'] || $sensor_result['temp_sensor'] > $indicator['0']['batas_atas_temp']){
      $sensor['temp_status'] = 'Not OK';
    }
    if($sensor_result['humid_sensor'] < $indicator['0']['batas_bawah_humid'] || $sensor_result['humid_sensor'] > $indicator['0']['batas_atas_humid']){
      $sensor['humid_status'] = 'Not OK';
    }
    // else{
    //   $sensor = [
    //     'ec_status' => 'OK',
    //     'ph_status' => 'OK',
    //     'temp_status' => 'OK',
    //     'humid_status' => 'OK'
    //   ];
    // }

    print_r($sensor);
    // echo $indicator['id'];
    // return ['sensor' => $sensor];
  }
}
