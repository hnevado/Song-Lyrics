<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PageController extends Controller
{

    public function welcome()
    {
      return view("welcome");
    }

    public function search(Request $request)
    {

        $request->validate([

            'artista' => 'required',
            'cancion' => 'required',
        ]);

        $url="https://api.lyrics.ovh/v1/".$request->artista."/".$request->cancion;

        $canciones=Http::get($url, [
            'timeout' => 60000,
            'debug' => TRUE, // remove after test
            'decode_content' => false,
            'headers'=>[
                'Content-Type' => 'application/json'
            ]
        ])->json();
       
        return view('canciones', ['canciones' => $canciones, 'artista' => $request->artista, 'cancion' => $request->cancion]);


    }



}
