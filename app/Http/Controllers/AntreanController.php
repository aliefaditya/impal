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
        $no = $this->getnomor($request->iddaftarjadwal);
        if ($no >= $this->currentnomor($request->iddaftarjadwal) && $no !=0){
            $Active = 0;
        }else{
            $Active =1;
        }
        if ($no == 0){
            $no = 1;
        }

        if($this->cekngantri($request->nikpasien)==false){
            DB::table('antrean')->insert([
                'Idantrean' => $request->idantrean,
                'nik_pasien' => $request->nikpasien,
                'nomor' => $no+1,
                'idDaftarJadwal' => $request->iddaftarjadwal,
                'isActive' => $Active
            ]);
        }

        // alihkan halaman ke halaman admin
        return redirect('/jadwal');
    }

    public function hapusantrian($id)
    {
        DB::table('antrean')->where('nik', '=', $id)->delete();

        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function antrianselanjutnya($id)
    {
        $nomor = $this->currentnomor($id);
        $this->setFalse($id, $nomor);
        $nomor = $nomor+1;
        $this->setTrue($id, $nomor);

    }

    public function setFalse($id, $no){
        DB::table('antrean')->where([
            ['idDaftarJadwal', '=', $id],
            ['nomor', '=', $no]])->update([
            'isActive' => 0
        ]);
    }
    
    public function setTrue($id, $no){
        DB::table('antrean')->where([
            ['idDaftarJadwal', '=', $id],
            ['nomor', '=', $no]])->update([
            'isActive' => 1
        ]);
    }

    public function cekngantri($id)
    {      
        return DB::table('antrean')->select('nik_pasien')->where('nik_pasien', '=', $id)->exists();
    }

    public function getnomor($id)
    {
        return (int)DB::table('antrean')->select('idDaftarJadwal')->where('idDaftarJadwal', '=', $id)->count();
    }

    public function getdetails($id)
    {
        $detail = DB::table('antrean')->where('nik_pasien', '=', $id)
        ->join('punyajadwal', 'antrean.idDaftarJadwal', '=', 'punyajadwal.daftarJadwal')
        ->join('dokter', 'punyajadwal.idDokter', '=', 'dokter.idDokter')
        ->join('poli', 'punyajadwal.idPoli', '=', 'poli.KodePoli')
        ->join('jadwal', 'punyajadwal.idJadwal', '=', 'jadwal.Idjadwal')
        ->select('antrean.*', 'dokter.*', 'poli.*', 'jadwal.*')
        ->first();

        return $detail;
    }

    public function currentnomor($id)
    {
        $currno = DB::table('antrean')->select('nomor')->where([
            ['idDaftarJadwal', '=', $id],
            ['isActive', '=', '1'],
        ])->value('nomor');

        if (!empty($currno)){
            return (int)$currno;
        }else{
            return 0;
        }
    }

    public function tampilantrian()
    {
        $poli = DB::table('poli')->get();
        $all = DB::table('antrean')->join('punyajadwal', 'antrean.idDaftarJadwal', '=', 'punyajadwal.daftarJadwal')
            ->join('dokter', 'punyajadwal.idDokter', '=', 'dokter.idDokter')
            ->join('poli', 'punyajadwal.idPoli', '=', 'poli.KodePoli')
            ->join('jadwal', 'punyajadwal.idJadwal', '=', 'jadwal.Idjadwal')
            ->select('antrean.*', 'dokter.*', 'poli.*', 'jadwal.*')
            ->get();

        return view('adminantrian', ['all' => $all, 'poli' => $poli, 'jadwal' => $jadwal]);
    }


    
}
