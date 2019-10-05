<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    	// mengambil data dari table pegawai
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['pasien' => $pasien]);
}


