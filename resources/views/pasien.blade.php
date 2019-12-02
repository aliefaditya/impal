

@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel ftco-degree-bg">
      <div class="slider-item bread-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
              <h1 class="mb-3 bread">Info Akun</h1>
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
<a></a> 

    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form  method="POST" id="editakun" action="pasien/update/" >
              <div class="form-group">
              {{ csrf_field() }}
                <label for="exampleInputEmail1">NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ Auth::user()->nik }}"  readonly>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" placeholder="Username Anda" value="{{ Auth::user()->username }}" readonly>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Anda" value="{{ Auth::user()->nama }}" readonly>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" placeholder="Email Anda" name="email" value="{{ Auth::user()->email }}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input type="text" class="form-control" placeholder="TTL Anda" value="{{ Auth::user()->ttl }}" readonly>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <textarea id="" cols="30" rows="7" class="form-control" placeholder="Alamat" name="alamat">{{ Auth::user()->alamat }}</textarea>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telepon</label>
              <input type="text" class="form-control" name="telepon" placeholder="Your Name" value="{{ Auth::user()->telepon }}">
              </div>
              <div class="form-group">
                <input type="submit" value="Ubah Profile" class="btn btn-primary py-3 px-5" form="editakun">
              </div>
              
            </form>
            <form action="pasien/ubahpassword/{{ Auth::user()->nik }}" method="POST" id="editpassword">
            <h2>Ubah Password</h2>
             {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Password Baru</label>
              <input type="password" class="form-control" name="password" placeholder="Your Name">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Password Lama</label>
              <input type="password" class="form-control" placeholder="Your Name" name="oldpassword">
              </div>
              <div class="form-group">
                <input type="submit" value="Ubah Password" class="btn btn-primary py-3 px-5" form="editpassword">
              </div>
            </form>

          
          </div>

          <div class="col-md-6" >Riwayat</div>
        </div>
      </div>
    </section>

 

@endsection
