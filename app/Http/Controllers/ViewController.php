<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function beranda () {
        return view('beranda', [
            "title" => "Beranda",
        ]);
    }

    public function pemdes () {
        return view('pemdes', [
            "title" => "Pemerintah Desa",
        ]);
    }

     public function informasiDesa () {
        return view('informasiDesa', [
            "title" => "Informasi Desa",
        ]);
    }

     public function webGIS () {
         return view('Gis', [
            "title" => "WebGIS",
        ]);
    }

    public function webGISLama () {
         return view('webGIS', [
            "title" => "WebGIS",
        ]);
    }

    public function mitraDesa () {
         return view('mitradesa', [
            "title" => "Mitra Desa",
        ]);
    }

}






