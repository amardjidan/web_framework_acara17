<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request){      
        return $request->segment(1);    
    }

    public function index2($nama){       
        return $nama ;   
    }

    public function formulir(){
        return view('formulir');
    }
    public function proses (Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : ".$nama.", Alamat : ".$alamat;

    }
}
  