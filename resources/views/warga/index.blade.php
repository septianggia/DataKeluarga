@extends('layouts.template')
@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('judulh1','Admin - Warga')
@section('konten')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Data Warga</h2>
            <a type="button" class="btn btn-success float-right" href="{{ route('warga.create') }}">
                <i class=" fas fa-plus"></i> Tambah Warga
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
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
                        <th>Aksi</th>
                   
                    </tr>
                </thead>
                <tbody>


                    @foreach($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->nama_kepala_keluarga }}</td>
                        <td>{{ $dt->no_kk }}</td>
                        <td>{{ $dt->alamat }}</td>
                        <td>{{ $dt->desa }}</td>
                        <td>{{ $dt->kecamatan }}</td>
                        <td>{{ $dt->provinsi }}</td>

                        <td>
                            <div class="btn-group">
                                <form action="{{ route('warga.destroy',$dt->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class=" fas fa-trash"></i>
                                    </button>
                                </form>
                                <a type="button" class="btn btn-warning" href="{{ route('warga.edit',$dt->id) }}">
                                    <i class=" fas fa-edit"></i>
                                </a>
                                <a type="button" class="btn btn-success" href="{{ route('warga.show',$dt->id) }}">
                                    <i class=" fas fa-eye"></i>
                                </a>
                                <a type="button" class="btn btn-secondary" href="{{ route('warga.bantuan',$dt->id) }}">
                                <i class=" fas fa-eye"></i>
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
