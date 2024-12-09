@extends('layouts.template')
@section('judulh1','Admin - Kartu Keluarga')
@section('styles')
<style>
    @media print {
        body {
            visibility: hidden;
        }
        .card {
            visibility: visible;
            position: absolute;
            top: 0;
            left: 0;
        }
        .btn {
            display: none;
        }
    }
</style>
@endsection


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


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Keluarga</h3>
        </div>
        <!-- /.card-header -->

        <div class=" card-body">
            <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>:</td>
                    <td>{{ $data[0]->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td>{{ $data[0]->nik }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>{{ $data[0]->jenis_kelamin }}</td>
                </tr>
                <tr>
                <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>{{ $data[0]->tempat_lahir }}</td>
                </tr>
                <tr>
                <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>{{ $data[0]->tanggal_lahir }}</td>
                </tr>
                <tr>
                <th>Agama</th>
                    <td>:</td>
                    <td>{{ $data[0]->agama }}</td>
                </tr>
                <th>Pendidikan</th>
                    <td>:</td>
                    <td>{{ $data[0]->pendidikan }}</td>
                </tr>
                <th>Jenis Pekerjaan</th>
                    <td>:</td>
                    <td>{{ $data[0]->jenis_pekerjaan }}</td>
                </tr>
                <th>Golongan Darah</th>
                    <td>:</td>
                    <td>{{ $data[0]->golongan_darah }}</td>
                </tr>
                <th>Status Perkawinan</th>
                    <td>:</td>
                    <td>{{ $data[0]->status_perkawinan }}</td>
                </tr>
                <th>Tanggal Perkawinan</th>
                    <td>:</td>
                    <td>{{ $data[0]->tanggal_perkawinan }}</td>
                </tr>
                <th>Status Hubungan Dalam Keluarga</th>
                    <td>:</td>
                    <td>{{ $data[0]->status_hubungan_dalam_keluarga }}</td>
                </tr>
                </tr>
                <th>Kewarganegaraan</th>
                    <td>:</td>
                    <td>{{ $data[0]->kewarganegaraan }}</td>
                </tr>
                </tr>
                <th>Ayah</th>
                    <td>:</td>
                    <td>{{ $data[0]->ayah }}</td>
                </tr>
                </tr>
                <th>Ibu</th>
                    <td>:</td>
                    <td>{{ $data[0]->ibu }}</td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    <button onclick="window.print()" class="btn btn-primary">Cetak</button>
</div>


    </div>
</div>
@endsection
