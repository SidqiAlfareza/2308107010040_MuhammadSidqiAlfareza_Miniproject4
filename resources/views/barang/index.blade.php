@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Barang</h1>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang Baru</a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Tgl Pengadaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barang as $barang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->jumlah }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>Rp {{ number_format($barang->harga_satuan, 0, ',', '.') }}</td>
                    <td>{{ $barang->tanggal_pengadaan->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- Untuk Pagination jika ada --}}
    {{-- {{ $barang->links() }} --}}
@endsection