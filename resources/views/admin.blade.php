@extends('layouts.app')

@section('content')



<div class="row"  style="margin-top:100px">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">

<div class="panel-heading btn-primary">WELCOME TO ADMIN ROUTE</div>

</div>

</div>

</div>
</div>
@include('pesan')
<!--POLI-->


<div class="container">
    <div class="box">
      <h2>Data Poli</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH POLI <span class="align-self-center icon-plus"></span></button>
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
              <td><a type="button" class="btn btn-danger"  href="/admin/hapuspoli/{{ $p->KodePoli }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
      Halaman : {{ $poli->currentPage() }} <br/>
    	Jumlah Data : {{ $poli->total() }} <br/>
    	Data Per Halaman : {{ $poli->perPage() }} <br/>
 
 
    	{{ $poli->links() }}
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
        <form method="POST" action="admin/updatepoli/" id="editpoli-{{ $p->KodePoli }}">
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
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi Poli" name="deskripsi" value="{{ $p->Deskripsi }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
      
        <input  type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan" form="editpoli-{{ $p->KodePoli }}">
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
      <form method="POST" action="admin/tambahpoli" id="tambahpoli">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="formGroupExampleInput">Kode Poli</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Poli" name="tkodepoli" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Poli</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Poli" name="tnamapoli"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Deskripsi</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi" name="tdeskripsi"required>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan" form="tambahpoli">
      </form>
      </div>
    </div>
  </div>

</div>


<!--JADWAL-->
<div class="container">
    <div class="box">
      <h2>Data Jadwal</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit2">TAMBAH JADWAL <span class="align-self-center icon-plus"></span></button>
      <br><br>
      <table class="table table-bordered" id="tablejadwal">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Jadwal</th>
            <th>Hari</th>
            <th>Shift</th>
            <th>Available</th>
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
              <td>@if ( $j->Available == 1) Yes
                  @else
                         No
                  @endif</td>
              

              <!--BUTTON EDIT MAHASISWA-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $j->Idjadwal }}"><span class="icon-pencil"></span></button></td>
              <!--BUTTON HAPUS ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="/admin/hapusjadwal/{{ $j->Idjadwal }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
      Halaman : {{ $jadwal->currentPage() }} <br/>
    	Jumlah Data : {{ $jadwal->total() }} <br/>
    	Data Per Halaman : {{ $jadwal->perPage() }} <br/>
 
 
    	{{ $jadwal->links() }}
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
        <form method="post" action="admin/updatejadwal" id="editjadwal">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="formGroupExampleInput">ID Jadwal</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Jadwal" name="idjadwal"  value="{{ $j->Idjadwal }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Hari" name="Hari" value="{{ $j->Hari }}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
            <select class="form-control" id="formGroupExampleInput2" name="hari" required>
                <option value="Senin" >Senin</option>
                <option value="Selasa" >Selasa</option>
                <option value="Rabu" >Rabu</option>
                <option value="Kamis" >Kamis</option>
                <option value="Jum'at" >Jum'at</option>
                <option value="Sabtu" >Sabtu</option>
                <option value="Minggu" >Minggu</option>
            </select>            
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
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan" form="editjadwal">
        </div>
        </form>
      </div>
    </div>
  </div>
@endforeach

<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA JADWAL</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="admin/tambahjadwal" id="tambahjadwal">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="formGroupExampleInput">ID Jadwal</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Jadwal" name="tidjadwal" required >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Hari</label>
            <select class="form-control" id="formGroupExampleInput2" name="thari" required>
                <option value="Senin" >Senin</option>
                <option value="Selasa" >Selasa</option>
                <option value="Rabu" >Rabu</option>
                <option value="Kamis" >Kamis</option>
                <option value="Jum'at" >Jum'at</option>
                <option value="Sabtu" >Sabtu</option>
                <option value="Minggu" >Minggu</option>
            </select>            
        </div>
        <div class="row">
            <div class="col-6"><label for="formGroupExampleInput">Jam Mulai</label></div>
            <div class="col-6"> <label for="formGroupExampleInput">Jam Akhir</label></div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                <input type="time" class="form-control" id="formGroupExampleInput" value="00:00" name="tjammulai" required >
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                <input type="time" class="form-control" id="formGroupExampleInput" value="00:00" name="tjamakhir" required >
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tavailable" value="tavailable" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Available
                </label>
            </div>
        </div>    
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan" form="tambahjadwal">
      </form>
      </div>
    </div>
  </div>

</div>





<!--DOKTER-->
<div class="container">
    <div class="box">
      <h2>Data Dokter</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit3">TAMBAH DOKTER <span class="align-self-center icon-user-plus"></span></button>
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
              <td><a type="button" class="btn btn-danger"  href="/admin/hapusdokter/{{ $d->idDokter }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>

       Halaman : {{ $dokter->currentPage() }} <br/>
    	Jumlah Data : {{ $dokter->total() }} <br/>
    	Data Per Halaman : {{ $dokter->perPage() }} <br/>
 
 
    	{{ $dokter->links() }}
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
        <form method="post" action="admin/updatedokter" id="editdokter">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="formGroupExampleInput">ID Dokter</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Dokter" name="iddokter"  value="{{ $d->idDokter }}" required readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama Dokter</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Dokter" name="namadokter" value="{{ $d->namaDokter }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan" form="editdokter">
        </div>
        </form>
      </div>
    </div>
  </div>
@endforeach

<!-- Modal Tambah Dokter -->
<div class="modal fade" id="edit3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA DOKTER</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="admin/tambahdokter" id="tambahdokter">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="formGroupExampleInput">ID Dokter</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Dokter" name="tiddokter" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Dokter</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="tnamadokter"required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan" form="tambahdokter">
      </form>
      </div>
    </div>
  </div>

</div>
</div>




<!--JADWAL JADWALPOLI-->
<div class="container">
    <div class="box">
      <h2>Data Jadwal Poli</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit4">TAMBAH JADWAL POLI <span class="align-self-center icon-plus"></span></button>
      <br><br>
      <table class="table table-bordered" id="tablejadwal">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Jadwal Poli</th>
            <th>Kode Poli</th>
            <th>Nama Poli</th>
            <th>Id Jadwal</th>
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
            <form action="">
              <td><?php echo $no++ ?></td>
              <td class="text-center">{{ $jp->daftarJadwal }}</td>
              <td class="text-center">{{ $jp->idPoli }}</td>
              <td class="text-center">{{ $jp->NamaPoli }}</td>
              <td class="text-center">{{ $jp->idJadwal }}</td>
              <td class="text-center">{{ $jp->Hari }}</td>
              <td class="text-center">{{ $jp->JamMulai }} - {{ $jp->JamAkhir }}</td>
              <td class="text-center">{{ $jp->namaDokter }}</td>
              <!--BUTTON EDIT POLI-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $jp->daftarJadwal }}"><span class="icon-pencil"></span></button></td>
              <!--BUTTON HAPUS ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="/admin/hapusjadwalpoli/{{ $jp->daftarJadwal }}" onClick="return confirm('Apakah Anda Yakin?')" ><span class="align-self-center icon-delete"></span></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>

      Halaman : {{ $jadwalpoli->currentPage() }} <br/>
    	Jumlah Data : {{ $jadwalpoli->total() }} <br/>
    	Data Per Halaman : {{ $jadwalpoli->perPage() }} <br/>
 
 
    	{{ $jadwalpoli->links() }}
    </div>
  </div>

<!-- Modal Edit JadwalPoli -->

<?php $no=1 ?>
  @foreach($jadwalpoli as $jp)
  <div class="modal fade" id="edit{{ $jp->daftarJadwal }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA JADWAL POLI</h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="admin/updatejadwalpoli" id="editjadwalpoli">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="formGroupExampleInput">ID Jadwal</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="jpdaftarjadwal"  value="{{ $jp->daftarJadwal }}" required readonly>
          </div>
          
          <div class="form-group">
            <label for="formGroupExampleInput2">ID Poli</label>
            <select class="form-control" id="formGroupExampleInput2" name="jpkodepoli" required>
            @foreach($poli as $p)
               
                <option value="{{ $p->KodePoli }}"   
                @if (($jp->idPoli) == $p->KodePoli) 
                selected="selected"
                @endif>{{ $p->KodePoli }}</option>
                
            @endforeach
            </select>            
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">ID Jadwal</label>
            <select class="form-control" id="formGroupExampleInput2" name="jpkodejadwal" required>
            @foreach($jadwal as $j)
                @if (($jp->idJadwal) == $j->Idjadwal)
                <option value="{{ $j->Idjadwal }}" selected="selected">{{ $j->Idjadwal }}</option>
                @else
                <option value="{{ $j->Idjadwal }}" >{{ $j->Idjadwal }}</option>
                @endif
            @endforeach
            </select>            
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput2">ID Dokter</label>
            <select class="form-control" id="formGroupExampleInput2" name="jpkodedokter" required>
            @foreach($dokter as $d)
                <option value="{{ $d->idDokter }}" 
                @if (($jp->idDokter) ==  $d->idDokter) 
                selected="selected"
                @endif
                >{{ $d->idDokter }}</option>
            @endforeach
            </select>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan" form="editjadwalpoli">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach


<!-- Modal Tambah JadwalPoli -->
<div class="modal fade" id="edit4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA JADWAL POLI</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="admin/tambahjadwalpoli" id="tambahjadwalpoli">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="formGroupExampleInput">ID Jadwal</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Jadwal Poli" name="tdaftarjadwal" required >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">ID Poli</label>
            <select class="form-control" id="formGroupExampleInput2" name="jpkodepoli" required>
            @foreach($poli as $p)
                <option value="{{ $p->KodePoli }}" >{{ $p->KodePoli }}</option>
            @endforeach
            </select>            
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">ID Jadwal</label>
            <select class="form-control" id="formGroupExampleInput2" name="jpkodejadwal" required>
            @foreach($jadwal as $j)
                <option value="{{ $j->Idjadwal }}" >{{ $j->Idjadwal }}</option>
            @endforeach
            </select>            
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput2">ID Dokter</label>
            <select class="form-control" id="formGroupExampleInput2" name="jpkodedokter" required>
            @foreach($dokter as $d)
                <option value="{{ $d->idDokter }}" >{{ $d->idDokter }}</option>
            @endforeach
            </select>            
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan" form="tambahjadwalpoli">
      </form>
      </div>
    </div>
  </div>

</div>









@stop


@section('js')

@stop
