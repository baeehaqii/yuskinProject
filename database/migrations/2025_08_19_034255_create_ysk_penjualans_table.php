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
        Schema::create('ysk_penjualans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('invoice');
            $table->string('nama_pelanggan');
            $table->string('produk_jasa');
            $table->string('produk_dagang');
            $table->integer('unit');
            $table->text('uraian');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ysk_penjualans');
    }
};
