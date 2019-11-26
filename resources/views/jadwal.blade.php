@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel ftco-degree-bg">
      <div class="slider-item bread-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/beranda') }}">Home</a></span> <span>About</span></p>
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

          
        <div class="row justify-content-center kotak-poli mb-4">
          <h3>Jadwal Poli</h3>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <h3 class="heading">Senin</h3>
                <p>Jam 10.00 - 12.00</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <h3 class="heading">Selasa</h3>
                <p>Jam 10.00 - 12.00</p>
              </div>
            </div>      
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <h3 class="heading">Rabu</h3>
                <p>Jam 10.00 - 12.00</p>
              </div>
            </div>    
          </div>
      
  
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <h3 class="heading">Senin</h3>
                <p>Jam 10.00 - 12.00</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate ">
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <h3 class="heading">Selasa</h3>
                <p>Jam 10.00 - 12.00</p>
              </div>
            </div>      
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-left kotak-jadwal">
              <div class="media-body p-3">
                <div class="row">
                  <div class="col-4">
                    <h3 class="heading">Rabu</h3>
                  </div>
                  <div class="col-8">
                    <p>Jam 10.00 - 12.00</p>
                  </div>
                  <div class="col-12">
                    <p>Nama dokter</p>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
</div>
@endsection
