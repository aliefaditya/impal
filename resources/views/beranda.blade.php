@extends('layouts.app')

@section('content')

@inject('Antrean', 'ASSES\Http\Controllers\AntreanController')
        <section class="home-slider owl-carousel ftco-degree-bg">
            <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-10 ftco-animate text-center">
                    <h1 class="mb-4">ASSES  
                        <strong class="typewrite" data-period="4000" data-type='[ "Cepat.", "Mudah.", "Efisien." ]'>
                        <span class="wrap"></span>
                        </strong>
                    </h1>
                    <p>Tidak perlu lelah antre untuk berobat,</br> cukup menggunakan platform asses semua terselesaikan dengan mudah. </p>
                    <!-- Perandaian kalau udah login atau nggak --> 
                    @guest
                        <p><a href="{{ route('register') }}" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span> Daftar Sekarang</a></p>
                        
                    @else
                    <p><a class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo">Selamat Datang,</br>{{ Auth::user()->nama }}</a></p>
                        
                    @endguest


                    
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- END slider --> 
        @if (Auth::check())
        @if( $Antrean->cekngantri( Auth::user()->nik ) )
        <!--================Event Date Area =================-->
        <?php $detail =$Antrean->getdetails( Auth::user()->nik )  ?>
        <section class="event_date_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d_flex">
                        <div class="evet_location flex">
                            <h3>Anda telah mendaftar berobat pada,</h3>
                            <p><span class="lnr lnr-calendar-full"></span>{{$detail->NamaPoli}}</p>
                            <p><span class="lnr lnr-calendar-full"></span>{{$detail->namaDokter}}</p>
                            <p><span class="lnr lnr-clock"></span>{{$detail->Hari}}, {{$detail->JamMulai}} - {{$detail->JamAkhir}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 d_flex">
                    <div class="row">
                        <h4>Nomor Antrean</h4>
                    </div>
                    <div class="row text-center">
                        <h1 style="font-size:150px">{{ $detail->nomor}}</h1>
                    </div>
                    </div>
                    <div class="col-md-4 event_time">
                        <h4>Perkiraan Waktu Tunggu Antrean</h4>
                        <div id="timer" class="timer">
                            <div class="timer__section hours">
                                <div class="timer__number"></div>
                                <div class="timer__label">hours</div>
                            </div>
                            <div class="timer__section minutes">
                                <div class="timer__number"></div>
                                <div class="timer__label">Minutes</div>
                            </div>
                            <div class="timer__section seconds">
                                <div class="timer__number"></div>
                                <div class="timer__label">seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Event Date Area =================-->
        @endif
        @endif

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2>How it works?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-user"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Login</h3>
                <p>Akses beberapa fitur di platform asses dan sesuaikan jadwal berobat</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-search"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Searching</h3>
                <p>Asses membantu kamu untuk melakukan pencarian poli atau dokter yang dituju</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-mobile"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Booking</h3>
                <p>Reservasi antrean dapat dilakukan disini.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-notifications"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Relax &amp; Receive the Notification</h3>
                <p>Pemberitahuan kondisi antrean dan estimasi waktu terhadap antrean anda</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
@endsection
