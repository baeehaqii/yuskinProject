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
        Schema::create('ysk_daftar_produk_dagangs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_produk');
            $table->string('nama_produk');
            $table->string('kategori_produk');
            $table->string('unit');
            $table->string('jumlah');
            $table->string('harga_perunit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ysk_daftar_produk_dagangs');
    }
};
