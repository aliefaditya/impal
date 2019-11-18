@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">

<div class="panel-heading btn-primary">WELCOME TO ADMIN ROUTE</div>

</div>

</div>

</div>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Poli</h3>
            @if (empty($poli))
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            @endif

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">KODE POLI</th>
                        <th class="text-center" scope="col">NAMA POLI</th>
                        <th class="text-center" scope="col">DESKRIPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>@foreach($poli as $p)
                        <td class="text-center">{{ $p->KodePoli }}</td>
                        <td class="text-center">{{ $p->NamaPoli }}</td>
                        <td class="text-center">{{ $p->Deskripsi }}</td>
                        <td class="text-center">
                        <a href="mahasiswa/hapus/{{ $p->KodePoli }}" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" >hapus</a>
                        <a href="mahasiswa/ubah/{{ $p->KodePoli }}" class="badge badge-success float-center">ubah</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="mahasiswa/tambah " class="btn btn-primary">Tambah Data Poli</a>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Jadwal</h3>
            @if (empty($jadwal))
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            @endif

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID Jadwal</th>
                        <th class="text-center" scope="col">HARI</th>
                        <th class="text-center" scope="col">SHIFT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>@foreach($jadwal as $j)
                        <td class="text-center">{{ $p->Idjadwal }}</td>
                        <td class="text-center">{{ $p->Hari }}</td>
                        <td class="text-center">{{ $p->JamMulai }}{{ $p->JamAkhir }}</td>
                        <td class="text-center">
                        <a href="mahasiswa/hapus/{{ $p->KodePoli }}" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" >hapus</a>
                        <a href="mahasiswa/ubah/{{ $p->KodePoli }}" class="badge badge-success float-center">ubah</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="mahasiswa/tambah " class="btn btn-primary">Tambah Data Jadwal</a>
                </div>
            </div>

        </div>
    </div>

<!--DOKTER-->
 <div class="container">
    <div class="box">
      <h2>Data Dokter</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH DOKTER <span class="align-self-center icon-user-plus"></span></button>
      <br><br>
      <table class="table table-bordered" id="tabledokter">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Dokter</th>
            <th>Nama Dokter</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1 ?>


          @foreach($dokter as $d)
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td>{{ $d->idDokter }}</td>
              <td>{{ $d->namaDokter }}</td>

              <!--BUTTON EDIT MAHASISWA-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $d->idDokter }}"><span class="icon-pencil"></span></button></td>
              <!--BUTTON HAPUS ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="/admin/hapus/{{ $d->idDokter }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Dokter -->

<?php $no=1 ?>
  @foreach($dokter as $d)
  <div class="modal fade" id="edit{{ $d->idDokter }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA DOKTER </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="edit">
          <div class="form-group">
            <label for="formGroupExampleInput">ID Dokter</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"  value="{{ $d->idDokter }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama Dokter</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelas" value="{{ $d->namaDokter }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
@endforeach

<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA DOKTER</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="tambah">
        <div class="form-group">
          <label for="formGroupExampleInput">ID Dokter</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nim" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Dokter</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>

</div>
</div>











@endsection