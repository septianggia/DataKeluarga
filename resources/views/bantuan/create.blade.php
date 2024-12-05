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
            <h3 class="card-title">Tambah Data Penerima</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('bantuan.index') }}" method="POST">
            @csrf

            <div class=" card-body">
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="date" class="form-control" id="tahun" name="tahun" placeholder="">
                </div>
                
                <div class="form-group">
                    <label for="jenis_bantuan">Jenis Bantuan</label>
                    <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan">
                </div>
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
