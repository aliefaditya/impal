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
      <h2>Data Antrian</h2>          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH POLI <span class="align-self-center icon-plus"></span></button>
      <br><br>
      <div>
      
      <form method="post" action="admin/updatejadwal" id="editjadwal">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="formGroupExampleInput2">Poli</label>
            <select class="form-control" id="poliantrian" name="hari" required>
            @foreach($poli as $p)
                <option value="{{ $p->NamaPoli }}" >{{ $p->NamaPoli }}</option>
            @endforeach
            </select>            
          </div>
 
      
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan" form="editjadwal">
        </form>
      

            <label>Poli</label>
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

      <table class="table table-bordered data-table" id="tablepoli">
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama Pasien</th>
            <th>Kode Poli</th>
            <th>Nama Poli</th>
            <th>Jadwal</th>
            <th>Dokter</th>
            <th>Nomor Antrian</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1 ?>


          @foreach($all as $a)
          <tr>
            <form action="">
              <td><?php echo $no++ ?></td>
              <td class="text-center">{{ $a->nik }}</td>
              <td class="text-center">{{ $a->nama }}</td>
              <td class="text-center">{{ $a->idPoli }}</td>
              <td class="text-center">{{ $a->NamaPoli }}</td>
              <td class="text-center">{{ $a->Hari }} {{ $a->JamMulai }} - {{ $a->JamAkhir }}</td>
              <td class="text-center">{{ $a->namaDokter }}</td>
              <td class="text-center">{{ $a->nomor }}</td>

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








@stop


@section('js')

@stop
