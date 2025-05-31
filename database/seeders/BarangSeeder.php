<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use Illuminate\Support\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Speaker',
            'deskripsi' => 'Speaker punya Gudang',
            'jumlah' => 5,
            'harga_satuan' => 15000000,
            'satuan' => 'Unit',
            'tanggal_pengadaan' => Carbon::now()->subDays(10), // 10 hari yang lalu
        ]);

        Barang::create([
            'nama_barang' => 'Kertas HVS A4 70gr',
            'deskripsi' => 'Kertas untuk keperluan kantor',
            'jumlah' => 10,
            'harga_satuan' => 45000,
            'satuan' => 'Rim',
            'tanggal_pengadaan' => Carbon::now()->subDays(5),
        ]);

        Barang::create([
            'nama_barang' => 'Tinta Printer Epson L3110 Hitam',
            'deskripsi' => 'Tinta original untuk printer Epson',
            'jumlah' => 20,
            'harga_satuan' => 75000,
            'satuan' => 'Botol',
            'tanggal_pengadaan' => Carbon::now()->subDays(2),
        ]);
    }
}
