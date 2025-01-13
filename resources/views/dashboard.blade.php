@extends('layouts.template')
@section('judulh1', 'Dashboard')

@section('tambahanCSS')
<style>
    .small-box {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        margin-bottom: 25px;
        background: #fff;
        overflow: hidden;
    }
    .small-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.15);
    }
    .small-box .inner {
        padding: 20px;
    }
    .small-box .inner h3 {
        font-size: 38px;
        font-weight: bold;
        margin: 0;
        white-space: nowrap;
        padding: 0;
    }
    .small-box .inner p {
        font-size: 16px;
        margin-bottom: 0;
    }
    .small-box.bg-info {
        background: linear-gradient(135deg, #36b9cc 0%, #1a8997 100%);
        color: white;
    }
    .small-box.bg-success {
        background: linear-gradient(135deg, #1cc88a 0%, #13855c 100%);
        color: white;
    }
    .small-box .icon {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 50px;
        opacity: 0.3;
    }
    .small-box .small-box-footer {
        background: rgba(0, 0, 0, 0.1);
        color: rgba(255, 255, 255, 0.9);
        padding: 8px 0;
        text-align: center;
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
    }
    .small-box .small-box-footer:hover {
        background: rgba(0, 0, 0, 0.2);
        color: #fff;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        margin-bottom: 25px;
    }
    .card-header {
        background: #f8f9fc;
        border-bottom: 1px solid #e3e6f0;
        padding: 15px 20px;
        border-radius: 15px 15px 0 0 !important;
    }
    .card-header h3 {
        margin: 0;
        font-size: 18px;
        color: #4e73df;
    }
    .quick-actions .btn {
        border-radius: 10px;
        padding: 12px 25px;
        font-weight: 500;
        margin: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .quick-actions .btn-primary {
        background: #4e73df;
        border: none;
    }
    .quick-actions .btn-success {
        background: #1cc88a;
        border: none;
    }
    .quick-actions .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(0,0,0,0.15);
    }
    .quick-actions .btn i {
        margin-right: 8px;
    }
</style>
@endsection

@section('konten')
<div class="container-fluid">
    <!-- Main Statistics -->
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="small-box bg-info position-relative">
                <div class="inner">
                    <h3>{{ $totalKK ?? 0 }}</h3>
                    <p>Total Kartu Keluarga</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('warga.index') }}" class="small-box-footer">
                    Lihat Data Warga <i class="fas fa-arrow-circle-right ml-1"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="small-box bg-success position-relative">
                <div class="inner">
                    <h3>{{ $totalBantuan ?? 0 }}</h3>
                    <p>Total Bantuan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <a href="{{ route('daftarbantuan.index') }}" class="small-box-footer">
                    Lihat Data Bantuan <i class="fas fa-arrow-circle-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bolt mr-2"></i>
                        Aksi Cepat
                    </h3>
                </div>
                <div class="card-body text-center quick-actions">
                    <a href="{{ route('warga.create') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i>
                        Tambah Warga
                    </a>
                    <a href="{{ route('daftarbantuan.create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i>
                        Tambah Data Bantuan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
