@extends('layouts.template')
@section('judulh1','Admin - TambahData')

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
   
        <form action="{{ route('tambahdata.update',$data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
            <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik">
                </div>
                <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <div class="form-group">
    <label for="agama">Agama</label>
    <select class="form-control" id="agama" name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
    </select>
</div>

<div class="form-group">
    <label for="pendidikan">Pendidikan</label>
    <select class="form-control" id="pendidikan" name="pendidikan">
        <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
        <option value="TAMAT/SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
        <option value="TIDAK/BELUMSEKOLAH">TIDAK/BELUM SEKOLAH</option>
    </select>
</div>
                <div class="form-group">
                    <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                    <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan">
                </div>
                <div class="form-group">
                    <label for="golongan_darah">Golongan Darah</label>
                    <input type="text" class="form-control" id="golongan_darah" name="golongan_darah">
                </div>
                <div class="form-group">
    <label for="status_perkawinan">Status Perkawinan</label>
    <select class="form-control" id="status_perkawinan" name="status_perkawinan">
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="Menikah">Menikah</option>
        <option value="Cerai Hidup">Cerai Hidup</option>
        <option value="Cerai Mati">Cerai Mati</option>
    </select>
</div>
                <div class="form-group">
                    <label for="tanggal_perkawinan">Tanggal Perkawinan</label>
                    <input type="text" class="form-control" id="tanggal_perkawinan" name="tanggal_perkawinan">
                </div>
                <div class="form-group">
    <label for="status_hubungan_dalam_keluarga">Status Hubungan Dalam Keluarga</label>
    <select class="form-control" id="status_hubungan_dalam_keluarga" name="status_hubungan_dalam_keluarga">
        <option value="Kepala Keluarga">Kepala Keluarga</option>
        <option value="Suami">Suami</option>
        <option value="Istri">Istri</option>
        <option value="Anak">Anak</option>
    </select>
</div>

<div class="form-group">
    <label for="kewarganegaraan">Kewarganegaraan</label>
    <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
    </select>
</div>
                <div class="form-group">
                    <label for="ayah">Ayah</label>
                    <input type="text" class="form-control" id="ayah" name="ayah">
                </div>
                <div class="form-group">
                    <label for="ibu">Ibu</label>
                    <input type="text" class="form-control" id="ibu" name="ibu">
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
