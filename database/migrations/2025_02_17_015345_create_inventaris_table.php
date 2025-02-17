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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merek')->nullable();
            $table->string('tipe')->nullable();
            $table->integer('jumlah');
            $table->year('tahun_pengadaan');
            $table->string('penyedia')->nullable();
            $table->string('nomor_kontrak')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
