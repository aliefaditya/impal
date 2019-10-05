@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
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
        
        <!--================Event Date Area =================-->
        <section class="event_date_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d_flex">
                        <div class="evet_location flex">
                            <h3>Anda telah mendaftar berobat pada,</h3>
                            <p><span class="lnr lnr-calendar-full"></span>Poli Umum</p>
                            <p><span class="lnr lnr-calendar-full"></span>5th may, 2018</p>
                            <p><span class="lnr lnr-clock"></span>Saturday, 09.00 am to 05.00 pm</p>
                        </div>
                    </div>
                    <div class="col-md-4 d_flex">
                    <div class="row">
                        <h4>Nomor Antrean</h4>
                    </div>
                    <div class="row text-center">
                        <h1 style="font-size:150px">2</h1>
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
@endsection
