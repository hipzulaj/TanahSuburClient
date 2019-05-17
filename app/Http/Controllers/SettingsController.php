<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class SettingsController extends Controller
{
  public function __construct()
{
  $this->client = new \GuzzleHttp\Client();
}

  public function index(){
    $tanaman = $this->getTanamanList();
    // print_r($tanaman);
    return view('settings', $tanaman);
  }

  public function getTanamanList(){
    $request = $this->client->get('http://localhost:8001/listtanaman/');
    $response = $request->getBody()->getContents();
    $tanaman = json_decode($response, true);
    $newArray = array("dipilih" => Cookie::get('dipilih'));
    array_unshift($tanaman, $newArray);
    // echo $response;

    // print_r($tanaman);
    return ['tanaman' => $tanaman];
  }

  public function ubahTanaman(Request $request){
    $cookie_value = $request->input('tanaman');
    $response = new Response('Tanaman Berhasil Diubah');
    $response->withCookie(cookie()->forever('dipilih', $cookie_value));
    return $response;
  }
}
