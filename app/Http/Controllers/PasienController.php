<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasienController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // mengambil data dari table pegawai
        
        $pasien = DB::table('pasien')->where('email', Auth::user()->email)->first();
       
 
    	//mengirim data pegawai ke view index
        return view('index',['pasien' => $pasien]);
        //return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }

    public function updateDataDiri(Request $request)
    {
        DB::table('pasien')->where('nik',$request->nik)->update([
            'email' => $request->email,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/pasien');
    
    }

    public function ubahpassword(Request $request, $id){

        $user = DB::table('pasien')->where('nik',$id)->first();

        if(Hash::check($request->oldpassword, $user->password)) {
            DB::table('pasien')->where('nik',$id)->update([
                'password' => Hash::make($request->password)
            ]);
        }
       
        // alihkan halaman ke halaman pasien

        return redirect('/pasien');

    }


}


