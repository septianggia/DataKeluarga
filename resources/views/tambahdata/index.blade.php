@extends('layouts.template')
@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('judulh1','Admin - TambahData')
@section('konten')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data Warga</h2>
            <a type="button" class="btn btn-success float-right" href="{{ route('tambahdata.create') }}">
                <i class=" fas fa-plus"></i> Tambah Warga
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengakap</th>
                        <th>NIK</th>
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
                        <td>{{ $dt->nama_lengkap }}</td>
                        <td>{{ $dt->nik }}</td>
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
                                    <button type="submit" class="btn btn-danger">
                                        <i class=" fas fa-trash"></i>
                                    </button>
                                </form>
                                <a type="button" class="btn btn-warning" href="{{ route('tambahdata.edit',$dt->id) }}">
                                    <i class=" fas fa-edit"></i>
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
