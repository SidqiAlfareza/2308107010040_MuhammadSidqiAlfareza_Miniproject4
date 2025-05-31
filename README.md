# Sistem Informasi Pengadaan Barang dan Jasa Sederhana

Ini adalah aplikasi web sederhana berbasis Laravel yang dibangun untuk mengelola data pengadaan barang dan jasa. Aplikasi ini mencakup fungsionalitas CRUD (Create, Read, Update, Delete) lengkap untuk entitas Barang dan Jasa.

Nama: Muhammad Sidqi Alfareza
NIM: 2308107010040
Mata Kuliah: Pemrograman Berbasis Web

## Deskripsi Proyek

Aplikasi ini bertujuan untuk menyediakan platform dasar untuk mencatat dan mengelola informasi terkait pengadaan barang dan jasa dalam sebuah organisasi atau keperluan pribadi. Pengguna dapat menambah, melihat daftar, mengubah detail, dan menghapus data barang maupun jasa yang telah diinput.

## Cara Instalasi dan Menjalankan Proyek

1.  **Clone Repositori:**
    ```bash
    git clone https://github.com/2308107010040_MuhammadSidqiAlfareza_Miniproject4
    cd 2308107010040_MuhammadSidqiAlfareza_Miniproject4
    ```

2.  **Install Dependensi Composer:**
    ```bash
    composer install
    ```

3.  **Salin File Environment:**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

4.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

5.  **Konfigurasi Database di File `.env`:**
    Buka file `.env` dan sesuaikan variabel berikut dengan konfigurasi database Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_sistem_pengadaan  
    ```

6.  **Buat Database:**
    Buat database baru di MySQL/MariaDB (misalnya melalui phpMyAdmin) dengan nama db_sistem_pengadaan di `DB_DATABASE` pada file `.env`.

7.  **Jalankan Migrasi dan Seeder:**
    Perintah ini akan membuat struktur tabel dan mengisi data awal (jika seeder sudah dibuat):
    ```bash
    php artisan migrate:fresh --seed
    ```
   
8.  **Jalankan Server Pengembangan Laravel:**
    ```bash
    php artisan serve
    ```

9.  **Akses Aplikasi:**
    Buka browser dan kunjungi alamat yang ditampilkan yaitu `http://127.0.0.1:8000` atau `http://localhost:8000`). Halaman utama akan mengarahkan Anda ke daftar barang.
