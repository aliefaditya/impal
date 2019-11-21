@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"style="margin: 20% auto">
                <div class="panel-heading"> You are logged in </div>

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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

