@extends('layouts.app')

@section('title', 'Tambah Jasa Baru')

@section('content')
    <h1>Tambah Jasa Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jasa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_jasa" class="form-label">Nama Jasa <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama_jasa') is-invalid @enderror" id="nama_jasa" name="nama_jasa" value="{{ old('nama_jasa') }}" required>
            @error('nama_jasa')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi_jasa" class="form-label">Deskripsi Jasa</label>
            <textarea class="form-control @error('deskripsi_jasa') is-invalid @enderror" id="deskripsi_jasa" name="deskripsi_jasa" rows="3">{{ old('deskripsi_jasa') }}</textarea>
            @error('deskripsi_jasa')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="harga_jasa" class="form-label">Harga Jasa (Rp) <span class="text-danger">*</span></label>
                <input type="number" step="0.01" class="form-control @error('harga_jasa') is-invalid @enderror" id="harga_jasa" name="harga_jasa" value="{{ old('harga_jasa', 0) }}" required min="0">
                @error('harga_jasa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="satuan_jasa" class="form-label">Satuan Jasa <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('satuan_jasa') is-invalid @enderror" id="satuan_jasa" name="satuan_jasa" value="{{ old('satuan_jasa') }}" required placeholder="Contoh: Per Proyek, Per Jam, Per Sesi">
                @error('satuan_jasa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="tanggal_pemesanan_jasa" class="form-label">Tanggal Pemesanan <span class="text-danger">*</span></label>
            <input type="date" class="form-control @error('tanggal_pemesanan_jasa') is-invalid @enderror" id="tanggal_pemesanan_jasa" name="tanggal_pemesanan_jasa" value="{{ old('tanggal_pemesanan_jasa', date('Y-m-d')) }}" required>
            @error('tanggal_pemesanan_jasa')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="vendor_penyedia" class="form-label">Vendor Penyedia</label>
            <input type="text" class="form-control @error('vendor_penyedia') is-invalid @enderror" id="vendor_penyedia" name="vendor_penyedia" value="{{ old('vendor_penyedia') }}">
            @error('vendor_penyedia')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan Jasa</button>
        <a href="{{ route('jasa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection