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
        Schema::create('ysk_daftar_aset_tetaps', function (Blueprint $table) {
            $table->id();
            $table->string('no_aset')->unique();
            $table->string('nama');
            $table->text('uraian')->nullable();
            $table->date('tanggal_pembelian')->nullable();
            $table->decimal('harga_pembelian', 15, 2)->default(0);
            $table->date('tanggal_penjualan')->nullable();
            $table->decimal('harga_penjualan', 15, 2)->nullable();
            $table->string('kategori_aset')->nullable();
            $table->decimal('nilai_penyusutan_awal', 15, 2)->default(0);
            $table->decimal('nilai_penyusutan_akhir', 15, 2)->nullable();
            $table->decimal('nilai_buku', 15, 2)->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ysk_daftar_aset_tetaps');
    }
};
