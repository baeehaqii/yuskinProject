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
        Schema::create('ysk_pembelians', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_po');
            $table->string('produk_dagang');
            $table->integer('unit');
            $table->text('uraian');
            $table->string('no_urut_po');
            $table->integer('jumlah');
            $table->decimal('harga_unit', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('rekening');
            $table->string('kategori_lk');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ysk_pembelians');
    }
};
