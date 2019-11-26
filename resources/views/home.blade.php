@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"style="margin: 20% auto">
                <div class="panel-heading">
                    You are logged in 
                    <?php 
                            $mytime = Carbon\Carbon::now();
                            echo $mytime->toDateTimeString(); 
                    ?>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi, {{ Auth::user()->nama }} !            

                    @if(\Session::has('error'))
                        <div class=”alert alert-danger”>
                    {{\Session::get('error')}}
                        </div>
                    @endif

                    <?php if(auth()->user()->isAdmin == 1){?>
                    
                    <div class=”panel-body”>

                    <a href="{{url('admin')}}">Admin</a>

                    </div><?php } else echo '<div class="panel-heading"> Silahkan ambil nomor antrean kamu </div>';?>
                    <div class="panel-heading">
                        <select class="form-control form-control-sm">
                                <option value="" selected disabled>Pilih Klinik</option>
                                <option value="jantung">Jantung dan Pembuluh Darah</option>
                                <option value="syaraf">Syaraf</option>
                                <option value="paru">Paru</option>
                                <option value="tht">THT</option>
                        </select>
                        <h1 style="font-size:150px; text-align: center">2</h1>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-lg" style="text-align: center;">Ambil Nomor</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

