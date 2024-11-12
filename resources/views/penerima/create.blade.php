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

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Penerima</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('penerima.index') }}" method="POST">
            @csrf

            <div class=" card-body">
                <div class="form-group">
                    <label for="nama_penerima">Nama Penerima</label>
                    <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="">
                </div>
                <div class="form-group">
                    <label for="no_kk">No KK</label>
                    <input type="number" class="form-control" id="no_kk" name="no_kk">
                </div>
                <div class="form-group">
    <label for="jenis_bantuan">Jenis Bantuan</label><br>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="bantuan_sosial_tunai" name="jenis_bantuan[]" value="Bantuan Sosial Tunai">
        <label class="form-check-label" for="bantuan_sosial_tunai">Bantuan Sosial Tunai</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="bantuan_pangan_non_tunai" name="jenis_bantuan[]" value="Bantuan Pangan Non-Tunai">
        <label class="form-check-label" for="bantuan_pangan_non_tunai">Bantuan Pangan Non-Tunai</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="program_keluarga_harapan" name="jenis_bantuan[]" value="Program Keluarga Harapan">
        <label class="form-check-label" for="program_keluarga_harapan">Program Keluarga Harapan</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="bantuan_langsung_tunai" name="jenis_bantuan[]" value="Bantuan Langsung Tunai">
        <label class="form-check-label" for="bantuan_langsung_tunai">Bantuan Langsung Tunai</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="subsidi_listrik" name="jenis_bantuan[]" value="Subsidi Listrik">
        <label class="form-check-label" for="subsidi_listrik">Subsidi Listrik</label>
    </div>
</div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
