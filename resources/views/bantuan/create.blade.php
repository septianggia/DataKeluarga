@extends('layouts.template')
@section('judulh1','Admin - Bantuan')

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

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Bantuan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('bantuan.store') }}" method="POST">
            @csrf

            <div class=" card-body">
<div class="form-group">
                
                <label for="jenis_bantuan">Jenis Bantuan</label>
                <select class="form-control" id="jenis_bantuan" name="jenis_bantuan">
                <option value="">Pilih Bantuan</option>
                    <option value="PKH">Program Keluarga Harapan (PKH)</option>
                    <option value="BLT">Bantuan Langsung Tunai (BLT)</option>
                    <option value="Bantuan Sembako">Bantuan Sembako</option>
                    <option value="Bantuan Pendidikan">Bantuan Pendidikan</option>
                    <option value="Bantuan Kesehatan">Bantuan Kesehatan</option>
                </select>
            </div>


            </div>
            <!-- /.card-body -->


            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
