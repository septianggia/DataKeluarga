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
                
                <!-- Grid Layout -->
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                                </td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>
                                    <input type="number" class="form-control" id="nik" name="nik" value="{{$data->nik}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>
                                    <select class="form-control" id="agama" name="agama">
                                        <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                        <option value="Kristen" {{ $data->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                        <option value="Katolik" {{ $data->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                        <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                        <option value="Buddha" {{ $data->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                        <option value="Konghucu" {{ $data->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr>
                                <th>Pendidikan</th>
                                <td>
                                    <select class="form-control" id="pendidikan" name="pendidikan">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="sd" {{ $data->pendidikan == 'sd' ? 'selected' : '' }}>SD/SEDERAJAT</option>
                                        <option value="smp" {{ $data->pendidikan == 'smp' ? 'selected' : '' }}>SMP/SEDERAJAT</option>
                                        <option value="sma" {{ $data->pendidikan == 'sma' ? 'selected' : '' }}>SMA/SEDERAJAT</option>
                                        <option value="belum_sekolah" {{ $data->pendidikan == 'belum_sekolah' ? 'selected' : '' }}>Belum Sekolah</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Jenis Pekerjaan</th>
                                <td>
                                    <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" value="{{$data->jenis_pekerjaan}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Golongan Darah</th>
                                <td>
                                    <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="{{$data->golongan_darah}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Status Perkawinan</th>
                                <td>
                                    <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                                        <option value="Belum Menikah" {{ $data->status_perkawinan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                        <option value="Menikah" {{ $data->status_perkawinan == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                        <option value="Cerai Hidup" {{ $data->status_perkawinan == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                        <option value="Cerai Mati" {{ $data->status_perkawinan == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Perkawinan</th>
                                <td>
                                    <input type="date" class="form-control" id="tanggal_perkawinan" name="tanggal_perkawinan" value="{{$data->tanggal_perkawinan}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Status Hubungan Dalam Keluarga</th>
                                <td>
                                    <select class="form-control" id="status_hubungan_dalam_keluarga" name="status_hubungan_dalam_keluarga">
                                        <option value="Kepala Keluarga" {{ $data->status_hubungan_dalam_keluarga == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                                        <option value="Istri" {{ $data->status_hubungan_dalam_keluarga == 'Istri' ? 'selected' : '' }}>Istri</option>
                                        <option value="Anak" {{ $data->status_hubungan_dalam_keluarga == 'Anak' ? 'selected' : '' }}>Anak</option>
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>

                                <th>Kewarganegaraan</th>
                                <td>
                                    <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                        <option value="WNI" {{ $data->kewarganegaraan == 'WNI' ? 'selected' : '' }}>WNI</option>
                                        <option value="WNA" {{ $data->kewarganegaraan == 'WNA' ? 'selected' : '' }}>WNA</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Ayah</th>
                                <td>
                                    <input type="text" class="form-control" id="ayah" name="ayah" value="{{$data->ayah}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Ibu</th>
                                <td>
                                    <input type="text" class="form-control" id="ibu" name="ibu" value="{{$data->ibu}}">
                                </td>
                            </tr>
                        </table>
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


