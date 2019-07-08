<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
  {
    $this->client = new \GuzzleHttp\Client(['http_errors' => false]);
    $this->apiAddress = "localhost:8001/";
  }

  public function DetailSensor(Request $request, $nama_alat, $nama_tanaman){
    if(Session::get('status') != 'login'){
      return redirect('/login');
    }
    else{
      $status = $this->getSensorData($nama_alat, $nama_tanaman);
      if($status['sensor']['status'] == 401) return redirect('/login');
      else if ($status['sensor']['status'] != 200) return response("error ".$status['sensor']['status'], $status['sensor']['status']);
      else return view('detailsensor', $this->getSensorData($nama_alat, $nama_tanaman));
    }
  }

  public function getSensorData($alat, $tanaman){
    $token = array(
      'headers'=>array('Content-Type'=>'application/json', 'Authorization' => 'bearer '.Session::get('token'))
    );
    $request = $this->client->get($this->apiAddress.'/getsensor/'.$alat.'/'.$tanaman, $token);
    $status = $request->getStatusCode();
    if($status == 401){
      $sensor = ['status' => $status];
      return ['sensor' => $sensor];
    }
    else if($status != 200){
      $sensor = ['status' => $status];
      return ['sensor'=> $sensor];
    }
    else{
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
        'tanaman' => urldecode($tanaman),
        'nilai' => $sensor_result['nilai'],
        'status' => 200
      ];
      // print_r($sensor);
      return ['sensor' => $sensor];
    }
  }

  public function Index(){
    $token = array(
      'headers'=>array('Content-Type'=>'application/json', 'Authorization' => 'bearer '.Session::get('token'))
    );
    $request = $this->client->get($this->apiAddress.'home/', $token);
    $status = $request->getStatusCode();
    if(Session::get('status') != 'login'){
      return redirect('/login');
    }
    else if($status == 401){
      $sensor = ['status' => $status];
      return redirect('/login');
    }
    else if($status != 200){
      $sensor = ['status' => $status];
      return ['sensor'=> $sensor];
    }
    else{
      $response = $request->getBody()->getContents();
      $sensor_result = json_decode($response, true);
      // print_r($sensor_result);
    return view('index', ['sensor' => $sensor_result]);
    }
  }
}