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
        Schema::create('ysk_penerimaan_pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_kuitansi');
            $table->string('terima_dari');
            $table->text('uraian');
            $table->decimal('pengeluaran', 10, 2);
            $table->decimal('penerimaan', 10, 2);
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
        Schema::dropIfExists('ysk_penerimaan_pengeluarans');
    }
};
