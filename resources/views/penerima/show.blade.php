@extends('layouts.template')
@section('judulh1','Admin - Penerima')


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
            <h3 class="card-title">Data Penerima</h3>
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
                    <th>No KK</th>
                    <td>:</td>
                    <td>{{ $data[0]->no_kk }}</td>
</tr>
                <tr>
                    <th>Jenis Bantuan</th>
                    <td>:</td>
                    <td>{{ $data[0]->jenis_bantuan}}</td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
