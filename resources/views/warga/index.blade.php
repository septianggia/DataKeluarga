@extends('layouts.template')
@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<style>
    .action-buttons {
        display: flex;
        gap: 5px;
        justify-content: center;
        align-items: center;
    }
    .action-buttons .btn {
        padding: 6px 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        transition: all 0.3s ease;
        font-size: 14px;
        min-width: 32px;
    }
    .action-buttons .btn i {
        font-size: 14px;
    }
    .action-buttons .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }
    .action-buttons .btn-danger:hover {
        background-color: #dc3545;
    }
    .action-buttons .btn-warning:hover {
        background-color: #ffc107;
    }
    .action-buttons .btn-success:hover {
        background-color: #28a745;
    }
    .action-buttons .btn-secondary:hover {
        background-color: #6c757d;
    }
    .table thead th {
        background-color: #f4f6f9;
        border-bottom: 2px solid #dee2e6;
        font-weight: 600;
    }
    .table tbody td {
        vertical-align: middle;
    }
    .btn-icon {
        padding: 6px 8px;
    }
    .btn-text {
        padding: 6px 12px;
    }
</style>
@endsection
@section('judulh1','Admin - Warga')
@section('konten')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data Warga</h2>
            <a class="btn btn-success float-right" href="{{ route('warga.create') }}">
                <i class="fas fa-plus"></i> Tambah Warga
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kepala Keluarga</th>
                            <th>No KK</th>
                            <th>Alamat</th>
                            <th>Desa</th>
                            <th>Kecamatan</th> 
                            <th>Kabupaten</th>
                            <th width="200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $dt->nama_kepala_keluarga }}</td>
                            <td>{{ $dt->no_kk }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>{{ $dt->desa }}</td>
                            <td>{{ $dt->kecamatan }}</td>
                            <td>{{ $dt->kabupaten }}</td>
                            <td>
                                <div class="action-buttons">
                                    <form action="{{ route('warga.destroy',$dt->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('warga.edit',$dt->id) }}" class="btn btn-warning btn-icon" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('warga.show',$dt->id) }}" class="btn btn-success btn-text" title="Detail">
                                        <i class="fas fa-eye"></i> Detail
                                    </a>
                                    <a href="{{ route('wargabantuan.list',$dt->id) }}" class="btn btn-secondary btn-text" title="Bantuan">
                                        <i class="fas fa-hand-holding-heart"></i> Bantuan
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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
@section('tambahScript')
<script src="{{asset('plugins/datables-fixedcolumns/js/dataTables.fixedColumns.js')}}"></script>
<script src="{{asset('plugins/datables-fixedcolumns/js/fixedColumns.bootstrap4.js')}}"></script>
<script>
$(function() {
    $("#example1").DataTable({
        "paging":true,
        "responsive": false,
        "lengthChange": true,
        "autoWidth": false,
       "scrollX":true,
       "fixedColumns": {
        leftColumns:2
       },
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
@if($message = Session::get('success'))
toastr.success("{{ $message}}");
@elseif($message = Session::get('updated'))
toastr.warning("{{ $message}}");
@elseif($message = Session::get('deleted'))
toastr.error("{{ $message}}");
@endif
</script>
@endsection
