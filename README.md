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
    git clone https://github.com/USERNAME_ANDA/NAMA_REPO_ANDA.git
    cd NAMA_REPO_ANDA
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
    DB_DATABASE=nama_database_anda  # Ganti dengan nama database yang akan Anda gunakan
    DB_USERNAME=username_database_anda # Ganti dengan username database Anda
    DB_PASSWORD=password_database_anda # Ganti dengan password database Anda (kosongkan jika tidak ada)
    ```

6.  **Buat Database:**
    Buat database baru di MySQL/MariaDB (misalnya melalui phpMyAdmin) dengan nama yang telah Anda tentukan di `DB_DATABASE` pada file `.env`.

7.  **Jalankan Migrasi dan Seeder:**
    Perintah ini akan membuat struktur tabel dan mengisi data awal (jika seeder sudah dibuat):
    ```bash
    php artisan migrate:fresh --seed
    ```
    Atau jika Anda hanya ingin menjalankan migrasi:
    ```bash
    php artisan migrate
    ```
    Dan seeder secara terpisah:
    ```bash
    php artisan db:seed
    ```

8.  **Jalankan Server Pengembangan Laravel:**
    ```bash
    php artisan serve
    ```

9.  **Akses Aplikasi:**
    Buka browser Anda dan kunjungi alamat yang ditampilkan (biasanya `http://127.0.0.1:8000` atau `http://localhost:8000`). Halaman utama akan mengarahkan Anda ke daftar barang. Anda dapat mengakses daftar jasa melalui link navigasi di header atau langsung ke URL `/jasa`.
