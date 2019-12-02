<?php

namespace ASSES\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class AdminController extends Controller
{
    public function admin()
    {
        $poli = DB::table('poli')->paginate(15);
        $jadwal = DB::table('jadwal')->paginate(15);
        $dokter = DB::table('dokter')->paginate(15);
        $jadwalpoli = DB::table('punyajadwal')->paginate(15);

        return view('admin', ['poli' => $poli, 'jadwal' => $jadwal, 'dokter' => $dokter, 'jadwalpoli' => $jadwalpoli]);
    }

    public function getindex($no){
        return redirect('/admin', ['no' => $no]);

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
			'KodePoli' => $request->tkodepoli,
			'NamaPoli' => $request->tnamapoli,
			'Deskripsi' => $request->tdeskripsi
		]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function hapuspoli($id)
    {
        DB::table('poli')->where('KodePoli', '=', $id)->delete();

        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function updatejadwal(Request $request)
    {
        if ( !empty ( $request->available) ) {
            $available = 1;
        }else{
            $available = 0;
        }
        // update data poli
        DB::table('jadwal')->where('Idjadwal',$request->idjadwal)->update([
            'Hari' => $request->hari,
            'JamMulai' => $request->jammulai,
            'JamAkhir' => $request->jamakhir,
            'Available' => $request->$available
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function tambahjadwal(Request $request)
    {
        if ( !empty ( $request->tavailable) ) {
            $available = 1;
        }else{
            $available = 0;
        }
        DB::table('jadwal')->insert([
			'Idjadwal' => $request->tidjadwal,
			'Hari' => $request->thari,
            'JamMulai' => $request->tjammulai,
            'JamAkhir' => $request->tjamakhir,
            'Available' => $available
		]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function hapusjadwal($id)
    {
        DB::table('jadwal')->where('Idjadwal', '=', $id)->delete();

        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function updatedokter(Request $request)
    {
        // update data poli
        DB::table('dokter')->where('idDokter',$request->iddokter)->update([
            'namaDokter' => $request->namadokter
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function tambahdokter(Request $request)
    {
        DB::table('dokter')->insert([
			'idDokter' => $request->tiddokter,
			'namaDokter' => $request->tnamadokter
		]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function hapusdokter($id)
    {
        DB::table('dokter')->where('idDokter', '=', $id)->delete();

        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function updatejadwalpoli(Request $request)
    {
        // update data poli
        DB::table('punyajadwal')->where('daftarJadwal',$id)->update([
            'idPoli' => $request->namapoli,
            'idJadwal' => $request->deskripsi,
            'idDokter' => $request->idDokter
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function tambahjadwalpoli(Request $request)
    {
        DB::table('punyajadwal')->insert([
            'daftarJadwal' => $request->tdaftarjadwal,
			'idPoli' => $request->tkodepoli,
			'idJadwal' => $request->tnamapoli,
			'idDokter' => $request->tdeskripsi
		]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function hapusjadwalpoli($id)
    {
        DB::table('punyajadwal')->where('daftarJadwal', '=', $request->kodepoli)->delete();

        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function updatepasien(Request $request)
    {
        // update data poli
        DB::table('pasien')->where('nik',$id)->update([
            'email' => $request->namapoli,
            'alamat' => $request->deskripsi,
            'telepon' => $request->telepon
        ]);
        // alihkan halaman ke halaman admin
        return redirect('/admin');
    }


    



    
}
