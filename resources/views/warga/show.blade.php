@extends('layouts.template')
@section('judulh1', 'Admin - Data Kartu Keluarga')

@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<style>
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        white-space: nowrap;
    }
    .table th, .table td {
        padding: 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
    }
    .btn-group {
        white-space: nowrap;
    }
</style>
@endsection

@section('konten')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data Kartu Keluarga</h2>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('tambahdata.create', $id) }}">
                    <i class="fas fa-plus"></i> Tambah Anggota Keluarga
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                            <th>Jenis Pekerjaan</th>
                            <th>Golongan Darah</th>
                            <th>Status Perkawinan</th>
                            <th>Tanggal Perkawinan</th>
                            <th>Status Hubungan Dalam Keluarga</th>
                            <th>Kewarganegaraan</th>
                            <th>Ayah</th>
                            <th>Ibu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->nik }}</td>
                            <td>{{ $dt->nama_lengkap }}</td>
                            <td>{{ $dt->jenis_kelamin }}</td>
                            <td>{{ $dt->tempat_lahir }}</td>
                            <td>{{ $dt->tanggal_lahir }}</td>
                            <td>{{ $dt->agama }}</td>
                            <td>{{ $dt->pendidikan }}</td>
                            <td>{{ $dt->jenis_pekerjaan }}</td>
                            <td>{{ $dt->golongan_darah }}</td>
                            <td>{{ $dt->status_perkawinan }}</td>
                            <td>{{ $dt->tanggal_perkawinan }}</td>
                            <td>{{ $dt->status_hubungan_dalam_keluarga }}</td>
                            <td>{{ $dt->kewarganegaraan }}</td>
                            <td>{{ $dt->ayah }}</td>
                            <td>{{ $dt->ibu }}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{ route('tambahdata.destroy',$dt->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="warga_id" id="warga_id" value="{{$id}}">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a type="button" class="btn btn-warning" href="{{ route('tambahdata.edit',$dt->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('tambahanJS')
<!-- DataTables & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection

@section('tambahScript')
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": false,
        "scrollX": true,
        "lengthChange": false,
        "autoWidth": false
    });
});

@if($message = Session::get('success'))
toastr.success("{{ $message }}");
@elseif($message = Session::get('updated'))
toastr.warning("{{ $message }}");
@elseif($message = Session::get('deleted'))
toastr.error("{{ $message }}");
@endif
</script>
@endsection
