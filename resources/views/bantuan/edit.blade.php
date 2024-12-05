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
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Penerima Bantuan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
   
        <form action="{{ route('bantuan.update',$data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
            <div class="form-group">
            <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{$data->tahun}}">
                </div>
                <div class="form-group">
                    <label for="jenis_bantuan">Jenis Bantuan</label>
                    <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan" value="{{$data->jenis_bantuan}}">
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
