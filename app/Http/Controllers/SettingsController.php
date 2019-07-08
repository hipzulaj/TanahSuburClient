<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
  public function __construct()
{
  $this->client = new \GuzzleHttp\Client();
  $this->apiAddress = "localhost:8001";
}

  //Manajemen Indikator Tanaman
  public function IndexUbahTanaman(){
    $tanaman = $this->getTanamanList();
    $newArray = array("dipilih" => Cookie::get('dipilih'));
    array_unshift($tanaman['tanaman'], $newArray);
    // print_r($tanaman);
    return view('Settings/ubahtanaman', $tanaman);
  }

  public function ubahTanaman(Request $request){
    $cookie_value = $request->input('tanaman');
    return redirect('/')->withCookie(cookie()->forever('dipilih', $cookie_value));
  }

  public function TambahSensorView(){
    $request = $this->client->get($this->apiAddress.'/listtanaman/');
    $response = $request->getBody()->getContents();
    $tanaman = json_decode($response, true);
    // echo $response;

    // print_r($tanaman);
    return view('Settings/tambahsensor', ['tanaman' => $tanaman]);
  }

  public function DaftarTanaman(){
    $request = $this->client->get($this->apiAddress.'/listtanaman');
    $response = $request->getBody()->getContents();
    $toJson = json_decode($response, true);
    // print_r($toJson);
    return view('Settings/daftartanaman', ['tanaman' => $toJson]);
  }

  public function TambahTanaman(Request $request){
    
    $username = Session::get('username');
    $data = array(
      'headers'=>array('Content-Type'=>'application/json', 'username'=>$username, 'Authorization' => 'bearer '.Session::get('token')),
      'json'=>array(
        'nama_tanaman' => $request->nama_tanaman,
        'batas_bawah_ec' => $request->batas_bawah_ec,
        'batas_atas_ec' => $request->batas_atas_ec,
        'batas_bawah_ph' => $request->batas_bawah_ph,
        'batas_atas_ph' => $request->batas_atas_ph,
        'batas_bawah_temp' => $request->batas_bawah_temp,
        'batas_atas_temp' => $request->batas_atas_temp,
        'batas_bawah_humid' => $request->batas_bawah_humid,
        'batas_atas_humid' => $request->batas_atas_humid
      ));
    $this->client->post($this->apiAddress.'/addtanaman', $data);
    return redirect('/settings/listtanaman');
  }

  public function EditTanamanPage(Request $request, $id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $request = $this->client->get($this->apiAddress.'/datatanaman/'.$id, $auth);
    $response = $request->getBody()->getContents();
    $toJson = json_decode($response, true);
    // print_r($toJson);
    return view('Settings/edittanaman', ['tanaman' => $toJson]);
  }

  public function EditTanaman(Request $request, $id){
    $username = Session::get('username');
    $data = array(
      'headers'=>array('Content-Type'=>'application/json', 'username'=>$username, 'Authorization' => 'bearer '.Session::get('token')),
      'json'=>array(
        'nama_tanaman' => $request->nama_tanaman,
        'batas_bawah_ec' => $request->batas_bawah_ec,
        'batas_atas_ec' => $request->batas_atas_ec,
        'batas_bawah_ph' => $request->batas_bawah_ph,
        'batas_atas_ph' => $request->batas_atas_ph,
        'batas_bawah_temp' => $request->batas_bawah_temp,
        'batas_atas_temp' => $request->batas_atas_temp,
        'batas_bawah_humid' => $request->batas_bawah_humid,
        'batas_atas_humid' => $request->batas_atas_humid
      ));
    $this->client->post($this->apiAddress.'/edittanaman/'.$id, $data);
    $this->UpdateNilaiByNamaTanaman($request->nama_tanaman);
    return redirect('/settings/listtanaman');
  }

  public function HapusTanaman($id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $this->client->delete($this->apiAddress.'/removetanaman/'.$id, $auth);
    $cookie = Cookie::forget('dipilih');
    return redirect('/settings/listtanaman')->withCookie($cookie);
  }

  //Manajemen Sensor
  public function DaftarSensor(){
    $request = $this->client->get($this->apiAddress.'/listsensor');
    $response = $request->getBody()->getContents();
    $toJson = json_decode($response, true);
    // print_r($toJson);
    return view('Settings/daftarsensor', ['sensors' => $toJson]);
  }

  public function TambahSensor(Request $request){
    $nama_sensor = $request->nama_sensor;
    $ip_address = $request->ip_address;
    $nama_tanaman = $request->nama_tanaman;
    $username = Session::get('username');
    $data = array(
      'headers'=>array('Content-Type'=>'application/json', 'username'=>$username, 'Authorization' => 'bearer '.Session::get('token')),
      'json'=>array(
        'nama_alat' => $nama_sensor,
        'ip_address' => $ip_address,
        'nama_tanaman' => $nama_tanaman
      ));
    // print_r($data);
    $this->client->post($this->apiAddress.'/addsensors', $data);
    return redirect('/settings/listsensor');
  }

  public function EditSensorPage(Request $request, $id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $request_sensor = $this->client->get($this->apiAddress.'/datasensor/'.$id, $auth);
    $response_sensor = $request_sensor->getBody()->getContents();
    $decode_sensor = json_decode($response_sensor, true);

    $request_tanaman = $this->client->get($this->apiAddress.'/listtanaman/');
    $response_tanaman = $request_tanaman->getBody()->getContents();
    $decode_tanaman = json_decode($response_tanaman, true);
    // print_r($toJson);
    return view('Settings/editsensor', ['sensor' => $decode_sensor, 'tanaman' => $decode_tanaman]);
  }

  public function EditSensor(Request $request, $id){
    $username = Session::get('username');
    $data = array(
      'headers'=>array('Content-Type'=>'application/json', 'username'=>$username, 'Authorization' => 'bearer '.Session::get('token')),
      'json'=>array(
        'nama_alat' => $request->nama_alat,
        'ip_address' => $request->ip_address,
        'nama_tanaman' => $request->nama_tanaman
      ));
    $this->client->post($this->apiAddress.'/editsensor/'.$id, $data);

    $auth = array(
      'headers'=>array('Content-Type'=>'application/json', 'username'=>$username,'Authorization' => 'bearer '.Session::get('token'))
    );
    $request = $this->client->get($this->apiAddress.'/getsensor/'.$request->nama_alat.'/'.$request->nama_tanaman, $auth);
    $response = $request->getBody()->getContents();
    $sensor_result = json_decode($response, true);
    // $nilai_baru = $sensor_result[]
    $nilai = array('headers'=>array('Content-Type'=>'application/json', 'username'=>$username, 'Authorization' => 'bearer '.Session::get('token')),
    'json'=>array(
      'nilai' => $sensor_result['nilai']
    ));
    $this->client->post($this->apiAddress.'/updatenilai/'.$sensor_result['id'], $nilai);
    // echo $sensor_result['id'];
    return redirect('/settings/listsensor');
  }

  public function UpdateNilaiByNamaTanaman($nama_tanaman){
    $auth = array(
      'headers'=>array('Content-Type'=>'application/json', 'username'=>Session::get('username'),'Authorization' => 'bearer '.Session::get('token'))
    );
    $tanaman = urldecode($nama_tanaman);
    $request = $this->client->post($this->apiAddress.'/updateallnilaibytanaman/'.$tanaman, $auth);
  }

  public function HapusSensor($id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $this->client->delete($this->apiAddress.'/removesensor/'.$id, $auth);
    return redirect('/settings/listsensor');
  }

  //Manajemen User
  public function ShowUsers(Request $request){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $request = $this->client->get($this->apiAddress.'/usermanagement/listusers/', $auth);
    $response = $request->getBody()->getContents();
    $toJson = json_decode($response, true);
    return view('Settings/daftaruser', ['users' => $toJson]);
  }

  public function RemoveUser($id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $this->client->delete($this->apiAddress.'/usermanagement/removeuser/'.$id, $auth);
    return redirect('/settings/usermanagement/listuser');
  }

  public function MakeAdmin($id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $this->client->post($this->apiAddress.'/usermanagement/makeadmin/'.$id, $auth);
    return redirect('/settings/usermanagement/listuser');
  }

  public function RemoveAdmin($id){
    $auth = array(
      'headers'=>array('username'=>Session::get('username'), 'Authorization' => 'bearer '.Session::get('token'))
    );
    $this->client->post($this->apiAddress.'/usermanagement/removeadmin/'.$id, $auth);
    return redirect('/settings/usermanagement/listuser');
  }
}
