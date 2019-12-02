@extends('layouts.app')

@section('content')
<div class="container"  style="margin-top:100px">
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

                    @if(\Session::has('error'))
                        <div class=”alert alert-danger”>
                    {{\Session::get('error')}}
                        </div>
                    @endif

                    <?php if(auth()->user()->isAdmin == 1){?>

                    <div class=”panel-body”>

                    <a href="{{url('admin')}}">Admin</a>

                    </div><?php } else echo '<div class="panel-heading">Normal User</div>';?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

