@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel ftco-degree-bg">
      <div class="slider-item bread-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
              <h1 class="mb-3 bread">Jadwal Praktek Dokter</h1>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container d-flex">
        <div class="section-2-blocks-wrapper row d-flex">
          
        
        </div>
      </div>
    </section>

<div class="container">

    <div class="row justify-content-center mb-5 pb-5">
          <h2>Daftar Online</h2>
          Poli, hari, jam, dokter, antrian saat ini, tombol pesan. Apabila pasien mengklik jadwal yang lebih dari satu hari maka akan disabled kolom inputnya
          jadi maksimal pesan 1 hari sebelumnya, dan pendaftaran akan ditutup apabila sudah penuh
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Jadwal Praktek Dokter</span>
            <h2>Jadwal Praktek Dokter</h2>
          </div>
        </div>
        <div class="row">
            <form action="#">
              <div class="form-group col-md-3 pr-md-5">
                <select class="form-control form-control-lg mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Pilih Klinik</option>
                  <option value="1">Jantung dan Pembuluh Darah</option>
                  <option value="2">Bedah</option>
                  <option value="3">Bedah Syaraf</option>
                  <option value="4">Kesehatan Jiwa</option>
                  <option value="5">Syaraf</option>
                  <option value="6">Paru</option>
                  <option value="7">Urologi</option>
                  <option value="8">Penyakit Dalam</option>
                  <option value="9">Kebidanan dan Kandungan</option>
                  <option value="10">Anak</option>
                  <option value="11">THT</option>
                  <option value="12">Mata</option>
                  <option value="13">Kulit, Kelamin, dan Kosmetika Kecantikan</option>
                  <option value="2">Radiologi</option>
                  <option value="3">Geriatri</option>
                  <option value="2">Prostodonsia</option>
                  <option value="3">Gigi</option>
                  <option value="3">Umum</option>
                  <option value="2">Bidan</option>
                  <option value="3">Fisioterapi</option>
                  
                  
                </select>
              </div>
              <div class="form-group col-md-3 pr-md-5">
                <input type="text" class="form-control" placeholder="Cari Dokter">
              </div>
              
                <div class="form-group col-md-2 pr-md-5">
                  <select class="form-control form-control-lg mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Pilih Hari</option>
                    <option value="1">Senin</option>
                    <option value="2">Selasa</option>
                    <option value="3">Rabu</option>
                    <option value="4">Kamis</option>
                    <option value="5">Jum'at</option>
                    <option value="6">Sabtu</option>                   
                </select>
              </div>

  
              
              <div class="form-group col-md-2 pr-md-5">
              <input type="text" class="form-control" placeholder="Cari Jam">
              </div>
              <div class="form-group-lg col-md-2 pr-md-5">
                <input type="submit" value="Cari" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

        @foreach($poli as $p)  
        <div class="row justify-content-center kotak-poli mb-4">
          <h3>Jadwal Poli {{$p->NamaPoli}}</h3>
        </div>
        <div class="row">
     
        @foreach($jadwal as $j)  
          @if ($j->idPoli == $p->KodePoli)

          <a type="button" data-toggle="modal" data-target="#jadwal-{{ $j->daftarJadwal }}">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate" onclick="klikJadwal()"> 
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <div class="row">
                  <div class="col-4">
                    <h3 class="heading">{{$j->Hari}}</h3>
                  </div>
                  <div class="col-8">
                    <p>Jam {{$j->JamMulai}} - {{$j->JamAkhir}}</p>
                  </div>
                  <div class="col-12">
                    <p>{{$j->namaDokter}}</p>
                  </div>
                </div>
              </div>
            </div>    
          </div>
          </a>
          @endif
          @endforeach
        </div>
        @endforeach
</div>

 
 @foreach($jadwal as $j)  
<!-- Modal Tambah Poli -->
<div class="modal fade" id="jadwal-{{ $j->daftarJadwal }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>DAFTAR ANTRIAN</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="jadwal/daftar" id="daftarantrian">
      {{ csrf_field() }}
      <div class="form-group">
          <input type="hidden" type="text" class="form-control" id="kodeantrean" value="" name="idantrean" required readonly>
        </div>
        <div class="form-group">
          <input type="hidden" type="text" class="form-control" id="formGroupExampleInput" value="{{ $j->daftarJadwal }}" name="iddaftarjadwal" required readonly>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">NIK</label>
          <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ Auth::user()->nik }}" name="nikpasien" required readonly>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Poli</label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $j->NamaPoli }}" name="tnamapoli"required readonly>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Hari</label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $j->Hari }}" name="tnamapoli"required readonly>
        </div>
        <div class="row">
            <div class="col-6"><label for="formGroupExampleInput">Jam Mulai</label></div>
            <div class="col-6"> <label for="formGroupExampleInput">Jam Akhir</label></div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                <input type="time" class="form-control" id="formGroupExampleInput" value="{{ $j->JamMulai }}" name="tjammulai" required readonly>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                <input type="time" class="form-control" id="formGroupExampleInput" value="{{ $j->JamAkhir }}" name="tjamakhir" required readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Dokter</label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $j->namaDokter }}" name="tnamapoli"required readonly>
        </div>
        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" value="Daftar" placeholder="Daftar" form="daftarantrian" onclick="coba('kodeantrean', 10)">
      </form>
      </div>
    </div>
  </div>

</div>
@endforeach

@endsection
