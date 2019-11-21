@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Pendaftaran Poli
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">NIK</label>
                            <input type="text" class="form-control" id="nama" name="nama" readonly>
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Poli</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="DKV">DKV</option>
                                <option value="MBTI">MBTI</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="form-group col-4">
                            <label for="jurusan">Hari</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label for="jurusan">Jam</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label for="jurusan">Dokter</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        </div>
                        <button type="submit" name="daftar" class="btn btn-primary float-right">Daftar Antrean</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 
@endsection