<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class AdminController extends Controller
{
    public function admin()
    {
        $poli = DB::table('poli')->get();
        $jadwal = DB::table('jadwal')->get();
        $dokter = DB::table('dokter')->get();
        $jadwalpoli = DB::table('punyajadwal')->get();

        return view('admin', ['poli' => $poli, 'jadwal' => $jadwal, 'dokter' => $dokter, 'jadwalpoli' => $jadwalpoli]);
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

    public function updatepoli(Request $request)
    {
        // update data poli
        DB::table('poli')->where('KodePoli',$request->kodepoli)->update([
            'NamaPoli' => $request->namapoli,
            'Deskripsi' => $request->deskripsi
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function tambahpoli(Request $request)
    {
        DB::table('poli')->insert([
			'KodePoli' => $request->kodepoli,
			'NamaPoli' => $request->namapoli,
			'Deskripsi' => $request->deskripsi
		]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    
}
