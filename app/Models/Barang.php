<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
       use HasFactory;
    
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'jumlah',
        'harga_satuan',
        'satuan',
        'tanggal_pengadaan',
    ];

   
    protected $casts = [
        'tanggal_pengadaan' => 'date',
        'harga_satuan' => 'decimal:2', // Untuk memastikan format desimal
    ]; 
}
