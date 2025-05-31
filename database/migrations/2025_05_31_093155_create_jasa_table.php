<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jasa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jasa');
            $table->text('deskripsi_jasa')->nullable();
            $table->decimal('harga_jasa', 15, 2)->default(0);
            $table->string('satuan_jasa');
            $table->date('tanggal_pemesanan_jasa');
            $table->string('vendor_penyedia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasa');
    }
};
