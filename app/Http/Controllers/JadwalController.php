<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index(){
    	// mengambil data dari table pegawai
    	$jadwal = DB::table('poli')
        ->join('punyajadwal', 'poli.KodePoli', '=', 'punyajadwal.idPoli')
        ->join('jadwal', 'punyajadwal.idJadwal', '=', 'jadwal.Idjadwal')
        ->select('poli.NamaPoli', 'jadwal.*')
        ->get();
 
    	// mengirim data pegawai ke view index
        return view('jadwal',['jadwal' => $jadwal]);
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    public function simpanpoli(Request $request)
    {
        DB::table('poli')->insert([
            'NamaPoli' => $request->namapoli,
            'KodePoli' => $request->kodepoli,
            'Deskripsi' => $request->despoli
        ]);

        return redirect('/jadwal');
    }

    public function simpan(Request $request)
    {
        // insert data ke table jadwal
        
        DB::table('jadwal')->insert([
            'Idjadwal' => $request->nama,
            'Hari' => $request->hari,
            'JamMulai' => $request->jammulai,
            'JamAkhir' => $request->jamakhir,
            'Available' => $request->jamakhir
        ]);
        DB::table('punyajadwal')->insert([
            'DaftarJadwal' => $request->nama,
            'idPoli' => $request->hari,
            'idJadwal' => $request->jammulai,
            'idDokter' => $request->jamakhir
        ]);
        // alihkan halaman ke halaman jadwal
        return redirect('/jadwal');
    
    }

    public function edit($id)
    {
        // mengambil data jadwal berdasarkan id yang dipilih
        $jadwal = DB::table('punyajadwal')->where('DaftarJadwal',$id)->get();
        // passing data jadwal yang didapat ke view edit.blade.php
        return view('edit',['jadwal' => $jadwal]);
    
    }

    // update data jadwal
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('punyajadwal')->where('DaftarJadwal',$request->id)->update([
            'idJadwal' => $request->idjadwal
        ]);
        // alihkan halaman ke halaman jadwal
        return redirect('/jadwal');
    }

    public function hapus($id)
    {
        // menghapus data jadwal berdasarkan id yang dipilih
        DB::table('punyajadwal')->where('DaftarJadwal',$id)->delete();
            
        // alihkan halaman ke halaman jadwal
        return redirect('/jadwal');
    }
}
