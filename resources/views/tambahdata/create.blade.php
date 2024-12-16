@extends('layouts.template')
@section('judulh1','Admin - Warga')

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

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Warga</h3>
        </div>
        <!-- /.card-header -->
        <form action="{{ route('tambahdata.store') }}" method="POST">
            @csrf
            <input type="hidden" name="warga_id" id="warga_id" value="{{$warga_id}}">
            <div class="card-body">
                <div class="row">
                    <!-- Tabel Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><label for="nama_lengkap">Nama Lengkap</label></td>
                                        <td><input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="nik">NIK</label></td>
                                        <td><input type="number" class="form-control" id="nik" name="nik"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                                        <td>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <option value="pilih_jenis_kelamin">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="tempat_lahir">Tempat Lahir</label></td>
                                        <td><input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                                        <td><input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="agama">Agama</label></td>
                                        <td>
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="pilih_agama">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Tabel Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><label for="jenis_pekerjaan">Jenis Pekerjaan</label></td>
                                        <td><input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="golongan_darah">Golongan Darah</label></td>
                                        <td><input type="text" class="form-control" id="golongan_darah" name="golongan_darah"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="status_perkawinan">Status Perkawinan</label></td>
                                        <td>
                                            <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                                                <option value="pilih_status_kawin">Pilih Status Perkawinan</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Cerai Hidup">Cerai Hidup</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="tanggal_perkawinan">Tanggal Perkawinan</label></td>
                                        <td><input type="date" class="form-control" id="tanggal_perkawinan" name="tanggal_perkawinan"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="status_hubungan_dalam_keluarga">Status Hubungan Dalam Keluarga</label></td>
                                        <td>
                                            <select class="form-control" id="status_hubungan_dalam_keluarga" name="status_hubungan_dalam_keluarga">
                                                <option value="hubungan dalam keluarga">Pilih Status Hubungan Dalam Keluarga</option>
                                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Anak">Anak</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="kewarganegaraan">Kewarganegaraan</label></td>
                                        <td>
                                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                                <option value="pilih kewarganegaraan">Pilih Kewarganegaraan</option>
                                                <option value="WNI">WNI</option>
                                                <option value="WNA">WNA</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Form -->
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
