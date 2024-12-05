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
    <div class="form-check">
        <input class="form-check-input" type="radio" id="pkh" name="jenis_bantuan" value="PKH" required>
        <label class="form-check-label" for="pkh">Program Keluarga Harapan (PKH)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" id="blt" name="jenis_bantuan" value="BLT">
        <label class="form-check-label" for="blt">Bantuan Langsung Tunai (BLT)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" id="bantuan_sembako" name="jenis_bantuan" value="Bantuan Sembako">
        <label class="form-check-label" for="bantuan_sembako">Bantuan Sembako</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" id="bantuan_pendidikan" name="jenis_bantuan" value="Bantuan Pendidikan">
        <label class="form-check-label" for="bantuan_pendidikan">Bantuan Pendidikan</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" id="bantuan_kesehatan" name="jenis_bantuan" value="Bantuan Kesehatan">
        <label class="form-check-label" for="bantuan_kesehatan">Bantuan Kesehatan</label>
    </div>
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
