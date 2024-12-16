@extends('layouts.template')
@section('judulh1','Admin - TambahData')

@section('konten')
<div class="col-md-12">
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
        <form action="{{ route('tambahdata.update',$data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <input type="hidden" name="warga_id" id="warga_id" value="{{$data->warga_id}}">
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik" value="{{$data->nik}}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $data->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ $data->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ $data->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Konghucu" {{ $data->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select class="form-control" id="pendidikan" name="pendidikan">
                                <option value="SLTA/SEDERAJAT" {{ $data->pendidikan == 'SLTA/SEDERAJAT' ? 'selected' : '' }}>SLTA/SEDERAJAT</option>
                                <option value="TAMAT/SD/SEDERAJAT" {{ $data->pendidikan == 'TAMAT/SD/SEDERAJAT' ? 'selected' : '' }}>TAMAT SD/SEDERAJAT</option>
                                <option value="TIDAK/BELUMSEKOLAH" {{ $data->pendidikan == 'TIDAK/BELUMSEKOLAH' ? 'selected' : '' }}>TIDAK/BELUM SEKOLAH</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                            <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" value="{{$data->jenis_pekerjaan}}">
                        </div>
                        <div class="form-group">
                            <label for="golongan_darah">Golongan Darah</label>
                            <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="{{$data->golongan_darah}}">
                        </div>
                        <div class="form-group">
                            <label for="status_perkawinan">Status Perkawinan</label>
                            <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                                <option value="Belum Menikah" {{ $data->status_perkawinan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Menikah" {{ $data->status_perkawinan == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Cerai Hidup" {{ $data->status_perkawinan == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                <option value="Cerai Mati" {{ $data->status_perkawinan == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_hubungan_dalam_keluarga">Status Hubungan Dalam Keluarga</label>
                            <select class="form-control" id="status_hubungan_dalam_keluarga" name="status_hubungan_dalam_keluarga">
                                <option value="Kepala Keluarga" {{ $data->status_hubungan_dalam_keluarga == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                                <option value="Suami" {{ $data->status_hubungan_dalam_keluarga == 'Suami' ? 'selected' : '' }}>Suami</option>
                                <option value="Istri" {{ $data->status_hubungan_dalam_keluarga == 'Istri' ? 'selected' : '' }}>Istri</option>
                                <option value="Anak" {{ $data->status_hubungan_dalam_keluarga == 'Anak' ? 'selected' : '' }}>Anak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                <option value="WNI" {{ $data->kewarganegaraan == 'WNI' ? 'selected' : '' }}>WNI</option>
                                <option value="WNA" {{ $data->kewarganegaraan == 'WNA' ? 'selected' : '' }}>WNA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ayah">Ayah</label>
                            <input type="text" class="form-control" id="ayah" name="ayah" value="{{$data->ayah}}">
                        </div>
                        <div class="form-group">
                            <label for="ibu">Ibu</label>
                            <input type="text" class="form-control" id="ibu" name="ibu" value="{{$data->ibu}}">
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-warning">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection