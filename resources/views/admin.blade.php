@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">

<div class="panel-heading btn-primary">WELCOME TO ADMIN ROUTE</div>

</div>

</div>

</div>

<!--POLI-->
<div class="container">
    <div class="box">
      <h2>Data Poli</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH JADWAL <span class="align-self-center icon-user-plus"></span></button>
      <br><br>
      <table class="table table-bordered data-table" id="tablepoli">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Poli</th>
            <th>Nama Poli</th>
            <th>Deskripsi</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1 ?>


          @foreach($poli as $p)
          <tr>
            <form action="">
              <td><?php echo $no++ ?></td>
              <td class="text-center">{{ $p->KodePoli }}</td>
              <td class="text-center">{{ $p->NamaPoli }}</td>
              <td class="text-center">{{ $p->Deskripsi }}</td>
              

              <!--BUTTON EDIT POLI-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $p->KodePoli }}"><span class="icon-pencil"></span></button></td>
              <!--BUTTON HAPUS ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="/admin/hapus/{{ $p->KodePoli }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Poli -->

<?php $no=1 ?>
  @foreach($poli as $p)
  <div class="modal fade" id="edit{{ $p->KodePoli }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA POLI </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="admin/updatepoli">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="formGroupExampleInput">ID Jadwal</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Poli" name="kodepoli"  value="{{ $p->KodePoli }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama Poli</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Poli" name="namapoli" value="{{ $p->NamaPoli }}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Deskripsi</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi Poli" name="deskripsi" value="{{ $p->NamaPoli }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
@endforeach

<!-- Modal Tambah Poli -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA POLI</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="admin/tambahpoli">
        <div class="form-group">
          <label for="formGroupExampleInput">Kode Poli</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Kode Poli" name="kodepolip" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Poli</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Poli" name="namapolip"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Deskripsi</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi" name="deskripsip"required>
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



<!--JADWAL-->
<div class="container">
    <div class="box">
      <h2>Data Jadwal</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH JADWAL <span class="align-self-center icon-user-plus"></span></button>
      <br><br>
      <table class="table table-bordered" id="tablejadwal">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Jadwal</th>
            <th>Hari</th>
            <th>Shift</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1 ?>


          @foreach($jadwal as $j)
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td>{{ $j->Idjadwal }}</td>
              <td>{{ $j->Hari }}</td>
              <td>{{ $j->JamMulai }} - {{ $j->JamAkhir }}</td>

              <!--BUTTON EDIT MAHASISWA-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $j->Idjadwal }}"><span class="icon-pencil"></span></button></td>
              <!--BUTTON HAPUS ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="/admin/hapus/{{ $j->Idjadwal }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Jadwal -->

<?php $no=1 ?>
  @foreach($jadwal as $j)
  <div class="modal fade" id="edit{{ $j->Idjadwal }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA JADWAL </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="edit">
          <div class="form-group">
            <label for="formGroupExampleInput">ID Jadwal</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namap"  value="{{ $j->Idjadwal }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelas" value="{{ $j->Hari }}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
          <select class="form-control" id="formGroupExampleInput2" name="jurusan" required>
            <option value="{{ $j->Hari }}" selected>{{ $j->Hari }}</option>
            <option value="Senin">Selasa</option>
            </select>  
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

<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA JADWAL</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="tambah">
        <div class="form-group">
          <label for="formGroupExampleInput">ID Jadwal</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nim" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Hari</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namap"required>
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
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namap"  value="{{ $d->idDokter }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama Dokter</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelaps" value="{{ $d->namaDokter }}" required>
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
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nimm" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Dokter</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namma"required>
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


<!--JADWAL POLI-->
<div class="container">
    <div class="box">
      <h2>Data Jadwal Poli</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH JADWAL <span class="align-self-center icon-user-plus"></span></button>
      <br><br>
      <table class="table table-bordered" id="tablejadwal">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Poli</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Dokter</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1 ?>


          @foreach($jadwalpoli as $jp)
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td class="text-center">{{ $jp->daftarJadwal }}</td>
              <td class="text-center">{{ $p->idPoli }}</td>
              <td class="text-center">{{ $p->idJadwal }}</td>
              <td class="text-center">{{ $p->idDokter }}</td>
              <!--BUTTON EDIT POLI-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $p->KodePoli }}"><span class="icon-pencil"></span></button></td>
              <!--BUTTON HAPUS ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="/admin/hapus/{{ $p->KodePoli }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Jadwal -->

<?php $no=1 ?>
  @foreach($jadwal as $j)
  <div class="modal fade" id="edit{{ $j->Idjadwal }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA JADWAL </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="edit">
          <div class="form-group">
            <label for="formGroupExampleInput">ID Jadwal</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namma"  value="{{ $j->Idjadwal }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelmas" value="{{ $j->Hari }}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
          <select class="form-control" id="formGroupExampleInput2" name="jurusan" required>
            <option value="{{ $j->Hari }}" selected>{{ $j->Hari }}</option>
            <option value="Senin">Selasa</option>
            </select>  
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

<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA JADWAL</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="tambah">
        <div class="form-group">
          <label for="formGroupExampleInput">ID Jadwal</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nimm" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Hari</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nmama"required>
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












@endsection