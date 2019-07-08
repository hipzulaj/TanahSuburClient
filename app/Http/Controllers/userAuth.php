<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class userAuth extends Controller
{
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->apiAddress = "localhost:8001";
    }

    public function registUser(){

    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;
        
        $user_auth = array(
                'headers'=>array('Content-Type'=>'application/json'),
                'json'=>array('username'=> $username, 'password'=> $password)
        );


        $request = $this->client->post($this->apiAddress.'/login', $user_auth);
        $response = $request->getBody()->getContents();
        $result = json_decode($response, true);

        if($result['status'] == 'login'){
            Session::put('username',$result['username']);
            Session::put('token',$result[0]['token']);
            Session::put('status',$result['status']);
            Session::put('role', $result['role']);
            return redirect('/');
        }
        else{
            return redirect('test')->with('alert','Password atau Email, Salah !');
        }
    }

    public function logoutUser(){
        Session::flush('username');
        Session::flush('token');
        Session::flush('status');
        Session::flush('role');
        return redirect('/login');
    }
}
