@extends('layouts.template')

@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<style>
    .table-responsive {
        overflow-x: auto; /* Memungkinkan pengguliran horizontal */
    }
    table#example1 {
        width: 100%;
        table-layout: auto;
        font-size: 18px; /* Memperbesar ukuran font tabel */
        border-collapse: collapse;
    }
    table#example1 th, table#example1 td {
        padding: 18px; /* Menambah padding agar teks lebih terbaca */
        vertical-align: middle;
        border: 1px solid #ddd;
        text-align: center;
    }
    table#example1 th {
        background-color: #f4f4f4; /* Warna latar belakang header menjadi lebih netral */
        color: #333; /* Warna teks lebih gelap untuk kontras */
        font-weight: bold;
    }
    table#example1 tbody tr:nth-child(even) {
        background-color: #fff; /* Warna latar belakang baris genap menjadi putih */
    }
    table#example1 tbody tr:nth-child(odd) {
        background-color: #f9f9f9; /* Warna latar belakang baris ganjil menjadi sedikit abu-abu */
    }
</style>
@endsection

@section('judulh1', 'Admin - Data Kartu Keluarga')

@section('konten')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data Penerima Bantuan</h2>
            <a class="btn btn-success float-right" href="{{ route('bantuan.create') }}">
                <i class="fas fa-plus"></i> Tambah Penerima
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penerima</th>
                            <th>No KK</th>
                            <th>Jenis Bantuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->nama_penerima }}</td>
                            <td>{{ $dt->no_kk }}</td>
                            <td>{{ $dt->jenis_bantuan }}</td>
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
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "scrollX": true, // Mengaktifkan pengguliran horizontal
        "lengthChange": true,
        "autoWidth": false, // Membiarkan kolom menyesuaikan lebar otomatis
        "columnDefs": [
            { "width": "20%", "targets": 1 }, // Menyesuaikan lebar kolom Nama Lengkap
            { "width": "15%", "targets": 2 }  // Menyesuaikan lebar kolom NIK
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
