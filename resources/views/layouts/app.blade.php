<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Pengadaan')</title> {{-- Judul lebih umum --}}
    <!-- Disini tempat Anda menaruh link CSS, misal Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 20px; }
        .container { max-width: 960px; }
        .header-title {
            text-decoration: none; /* Menghilangkan garis bawah default dari link */
            color: inherit; /* Menggunakan warna teks dari parent */
        }
        .header-title:hover {
            color: #0d6efd; /* Warna biru Bootstrap saat hover, opsional */
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            {{-- Bagian Judul Aplikasi --}}
            <a href="{{ route('barang.index') }}" class="d-flex align-items-center col-md-auto mb-2 mb-md-0 header-title">
                {{-- Anda bisa menambahkan SVG ikon di sini jika mau --}}
                {{-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg> --}}
                <span class="fs-4">Sistem Pengadaan</span>
            </a>

            {{-- Bagian Navigasi Link --}}
            <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('barang.index') }}" class="nav-link px-2 {{ request()->routeIs('barang.*') ? 'active' : 'link-dark' }}">
                        Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jasa.index') }}" class="nav-link px-2 {{ request()->routeIs('jasa.*') ? 'active' : 'link-dark' }}">
                        Jasa
                    </a>
                </li>
                {{-- Contoh link lain jika perlu:
                <li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Laporan</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Pengaturan</a></li>
                --}}
            </ul>

            {{-- Anda bisa menambahkan tombol Login/Logout di sini jika ada otentikasi --}}
            {{-- <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div> --}}
        </header>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')

        <footer class="pt-3 mt-4 text-muted border-top">
            © {{ date('Y') }} PT. Sidqi Jaya
        </footer>
    </div>
    <!-- Disini tempat Anda menaruh link JS, misal Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>