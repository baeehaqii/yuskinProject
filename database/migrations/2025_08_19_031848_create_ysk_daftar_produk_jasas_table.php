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
        Schema::create('ysk_daftar_produk_jasas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_produk');
            $table->string('nama_produk');
            $table->string('gol_harga_1');
            $table->string('gol_harga_2');
            $table->string('gol_harga_3');
            $table->string('gol_harga_4');
            $table->string('gol_harga_5');
            $table->string('keterangan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ysk_daftar_produk_jasas');
    }
};
