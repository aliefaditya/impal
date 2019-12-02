<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class AntreanController extends Controller
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

    public function updateantrian(Request $request)
    {
        // update data poli
        DB::table('antrean')->where('KodePoli',$id)->update([
            'NamaPoli' => $request->namapoli,
            'Deskripsi' => $request->deskripsi
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function tambahantrian(Request $request)
    {
        if (getnomor()> currentnomor()){
            $Active = 0;
        }else{
            $Active =1;
        }
        DB::table('antrean')->insert([
			'Idantrean' => $request->tkodepoli,
			'nik_pasien' => $request->tnamapoli,
            'nomor' => $request->getnomor(),
            'idDaftarJadwal' => $request->tiddaftarjadwal,
            'isActive' => $Active
		]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function hapusantrian($id)
    {
        DB::table('antrean')->where('nik', '=', $id)->delete();

        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function antrianselanjutnya()
    {
        //$nomor = this->currentnomor($id);
        


    }

    

    public function cekngantri(Request $request)
    {
        DB::table('antrean')->select('nik_pasien')->where('nik_pasien', '=', $id);
       
        return redirect('/admin');
    }

    public function getnomor()
    {
        DB::table('antrean')->select('idDaftarJadwal')->where('idDaftarJadwal', '=', $id)->count();
    }

    public function getdetails()
    {
        DB::table('antrean')->join('punyajadwal', 'antrean.idDaftarJadwal', '=', 'punyajadwal.user_id');
    }

    public function currentnomor()
    {
        DB::table('antrean')->select('nomor')->where([
            ['idDaftarJadwal', '=', $id],
            ['active', '=', '1'],
        ])->get();
    }



    
}
