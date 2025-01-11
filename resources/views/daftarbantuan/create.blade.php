@extends('layouts.template')
@section('judulh1','Admin - DaftarBantuan')

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
        <form action="{{ route('daftarbantuan.store') }}" method="POST">
            @csrf

            <div class=" card-body">
            <div class="form-group">
    <label for="tahun">Tahun</label>
    <select class="form-control" id="tahun" name="tahun">
        <!-- Daftar tahun dari 2020 hingga 2030, bisa disesuaikan sesuai kebutuhan -->
        <option value="">Pilih Tahun</option>
        @for ($i = 2020; $i <= 2030; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
</div>
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
