@extends('layouts.template')
@section('judulh1','Admin - WargaBantuan')

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
            <h3 class="card-title">Tambah Bantuan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('wargabantuan.store') }}" method="POST">
            @csrf

            <div class=" card-body">
                <input type="hidden" name="warga_id" id="warga_id" value="{{$warga_id}}">
                <div class="form-group">
                    <label for="bantuan">Bantuan</label>
                            <select class="form-control" id="bantuan_id" name="bantuan_id">
                                <option value="">Pilih Bantuan</option>
                                @foreach($daftar_bantuan as $db)
                                <option value="{{$db->id}}">{{$db->jenis_bantuan}}-{{$db->tahun}}</option>
                                @endforeach
                                
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
