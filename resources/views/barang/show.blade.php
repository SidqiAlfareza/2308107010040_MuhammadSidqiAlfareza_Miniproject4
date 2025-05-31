@extends('layouts.app')

@section('title', 'Detail Barang: ' . $barang->nama_barang)

@section('content')
    <h1>Detail Barang: {{ $barang->nama_barang }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $barang->deskripsi ?: '-' }}</p>
            <p class="card-text"><strong>Jumlah:</strong> {{ $barang->jumlah }} {{ $barang->satuan }}</p>
            <p class="card-text"><strong>Harga Satuan:</strong> Rp {{ number_format($barang->harga_satuan, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Total Harga:</strong> Rp {{ number_format($barang->jumlah * $barang->harga_satuan, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Tanggal Pengadaan:</strong> {{ $barang->tanggal_pengadaan->format('d F Y') }}</p>
            <p class="card-text"><small class="text-muted">Dibuat pada: {{ $barang->created_at->format('d M Y, H:i') }}</small></p>
            <p class="card-text"><small class="text-muted">Diperbarui pada: {{ $barang->updated_at->format('d M Y, H:i') }}</small></p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
    </div>
@endsection