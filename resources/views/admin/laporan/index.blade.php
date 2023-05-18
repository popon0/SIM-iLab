@extends('layouts.master_admin')

@section('content')
<div class="row my-3">
    <div class="col-md-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-clipboard-list"></i> Laporan</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-lg">
        <h1>Export</h1>
    </div>
</div>

<div class="row my-3">
    <div class="col-lg-8">
        <div class="d-flex flex-column">
            <div class="dropdown my-1">
                <a class="btn btn-outline-secondary" href="{{ route('laporan.peminjaman.excel') }}">Laporan Peminjaman</a>
            </div>
            <div class="dropdown my-1">
                <a class="btn btn-outline-secondary" href="{{ route('laporan.inventaris.excel') }}">Laporan Inventaris</a>
            </div>
            <div class="dropdown my-1">
                <a class="btn btn-outline-secondary" href="{{ route('laporan.jenis.excel') }}">Laporan Daftar Jenis</a>
            </div>
            <div class="dropdown my-1">
                <a class="btn btn-outline-secondary" href="{{ route('laporan.ruang.excel') }}">Laporan Daftar Ruang</a>
            </div>
        </div>
    </div>
</div>
@endsection
