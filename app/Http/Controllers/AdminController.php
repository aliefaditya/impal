<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
        $poli = DB::table('poli')->get();
        $jadwal = DB::table('jadwal')->get();
        $dokter = DB::table('dokter')->get();
        return view('admin', ['poli' => $poli, 'jadwal' => $jadwal, 'dokter' => $dokter]);
    }

    public function index(){
    	// mengambil data dari table pegawai
        $poli = DB::table('poli')->get();
        $jadwal = DB::table('jadwal')->get();
        $dokter = DB::table('dokter')->get();
 
    	// mengirim data pegawai ke view index
        return view('jadwal',['poli' => $poli, 'jadwal' => $jadwal, 'dokter' => $dokter]);
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    
}
