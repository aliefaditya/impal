<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        
        $pasien = DB::table('pasien')->where('email', Auth::user()->email)->first();
       
 
    	//mengirim data pegawai ke view index
        return view('index',['pasien' => $pasien]);
        //return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }


}


