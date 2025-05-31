@extends('layouts.app')

@section('title', 'Detail Jasa: ' . $jasa->nama_jasa)

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Detail Jasa</h1>
        <div>
            <a href="{{ route('jasa.edit', $jasa->id) }}" class="btn btn-warning">Edit Jasa</a>
            <a href="{{ route('jasa.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header fs-5">
            {{ $jasa->nama_jasa }}
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <strong class="col-sm-3">Nama Jasa:</strong>
                <div class="col-sm-9">{{ $jasa->nama_jasa }}</div>
            </div>
            <div class="row mb-2">
                <strong class="col-sm-3">Deskripsi:</strong>
                <div class="col-sm-9">{{ $jasa->deskripsi_jasa ?: '-' }}</div>
            </div>
            <div class="row mb-2">
                <strong class="col-sm-3">Harga:</strong>
                <div class="col-sm-9">Rp {{ number_format($jasa->harga_jasa, 0, ',', '.') }}</div>
            </div>
            <div class="row mb-2">
                <strong class="col-sm-3">Satuan:</strong>
                <div class="col-sm-9">{{ $jasa->satuan_jasa }}</div>
            </div>
            <div class="row mb-2">
                <strong class="col-sm-3">Tanggal Pemesanan:</strong>
                <div class="col-sm-9">{{ $jasa->tanggal_pemesanan_jasa->format('d F Y') }}</div>
            </div>
            <div class="row mb-2">
                <strong class="col-sm-3">Vendor Penyedia:</strong>
                <div class="col-sm-9">{{ $jasa->vendor_penyedia ?: '-' }}</div>
            </div>
            <hr>
            <div class="row mb-1">
                <strong class="col-sm-3">Dibuat pada:</strong>
                <div class="col-sm-9">{{ $jasa->created_at->format('d M Y, H:i:s') }} ({{ $jasa->created_at->diffForHumans() }})</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Diperbarui pada:</strong>
                <div class="col-sm-9">{{ $jasa->updated_at->format('d M Y, H:i:s') }} ({{ $jasa->updated_at->diffForHumans() }})</div>
            </div>
        </div>
    </div>
@endsection