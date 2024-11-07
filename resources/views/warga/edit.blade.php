@extends('layouts.template')
@section('judulh1','Admin - Warga')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Warga</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('warga.update',$warga->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
            <div class="form-group">
                    <label for="no_kk">No KK</label>
                    <input type="number" class="form-control" id="no_kk" name="no_kk" value="{{$warga->nama_kepala_keluarga}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$warga->alamat}}">
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{$warga->kode_pos}}">
                </div>
                <div class="form-group">
                    <label for="desa">Desa</label>
                    <input type="text" class="form-control" id="desa" name="desa" value="{{$warga->desa}}">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{$warga->kecamatan}}">
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{$warga->kabupaten}}">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{$warga->provinsi}}">
                </div>
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Ubah</button>
            </div>
        </form>
    </div>

</div>

@endsection
