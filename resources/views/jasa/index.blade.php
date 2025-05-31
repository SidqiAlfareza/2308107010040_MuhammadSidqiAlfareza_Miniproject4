@extends('layouts.app')

@section('title', 'Daftar Jasa')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Jasa</h1>
        <a href="{{ route('jasa.create') }}" class="btn btn-primary">Tambah Jasa Baru</a>
    </div>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama Jasa</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Tgl Pemesanan</th>
                <th>Vendor Penyedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jasa as $item)  {{-- Menggunakan $item agar lebih generik jika Anda menyalinnya --}}
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_jasa }}</td>
                    <td>Rp {{ number_format($item->harga_jasa, 0, ',', '.') }}</td>
                    <td>{{ $item->satuan_jasa }}</td>
                    <td>{{ $item->tanggal_pemesanan_jasa->format('d M Y') }}</td>
                    <td>{{ $item->vendor_penyedia ?: '-' }}</td>
                    <td>
                        <a href="{{ route('jasa.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('jasa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jasa.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jasa ini: {{ $item->nama_jasa }}?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data jasa yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Untuk Pagination jika Anda menggunakannya di controller --}}
    {{-- <div class="mt-3">
        {{ $jasa->links() }}
    </div> --}}
@endsection