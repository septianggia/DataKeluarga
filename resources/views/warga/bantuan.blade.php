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

@section('judulh1', 'Admin - Data Penerima Bantuan')

@section('konten')

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Informasi Kartu Keluarga</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <strong>No Kartu Keluarga:</strong>
                </div>
                <div class="col-md-8">
                    {{$dataWarga['no_kk']}}
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <strong>Nama Kepala Keluarga:</strong>
                </div>
                <div class="col-md-8">
                    {{$dataWarga['nama_kepala_keluarga']}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data Penerima Bantuan</h2>
            <a class="btn btn-success float-right" href="{{ route('wargabantuan.create',$warga_id) }}">
                <i class="fas fa-plus"></i> Tambah Bantuan
            </a>
            <!-- Tombol Cetak -->
            <button id="printPage" class="btn btn-primary float-right mr-3">
                <i class="fas fa-print"></i> Cetak Halaman
            </button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Bantuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $databantuan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            @foreach($databantuan as $dt)
                            <td>{{ $dt->tahun}}</td>
                            <td>{{ $dt->jenis_bantuan }}</td>
                            @endforeach
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
        "scrollX": true,
        "lengthChange": true,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"], // Tambahkan tombol cetak
        "columnDefs": [
            { "width": "20%", "targets": 1 },
            { "width": "15%", "targets": 2 }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});

// Tombol cetak halaman penuh
$('#printPage').on('click', function () {
    window.print();
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
