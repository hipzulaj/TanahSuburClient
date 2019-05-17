<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
  public function setCookie(Request $request) {
    $cookie_value = $request->input('tanaman');
    $response = new Response('Tanaman Berhasil Diubah');
    $response->withCookie(cookie()->forever('dipilih', $cookie_value));
    return $response;
 }
 public function getCookie(Request $request) {
    $value = $request->cookie('dipilih');
    return $value;
 }
}
