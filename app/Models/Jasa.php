<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'jasa'; // <--- PENTING: MENDEFINISIKAN NAMA TABEL SINGULAR

    protected $fillable = [
        'nama_jasa',
        'deskripsi_jasa',
        'harga_jasa',
        'satuan_jasa',
        'tanggal_pemesanan_jasa',
        'vendor_penyedia',
    ];

    protected $casts = [
        'tanggal_pemesanan_jasa' => 'date',
        'harga_jasa' => 'decimal:2',
    ];
}
