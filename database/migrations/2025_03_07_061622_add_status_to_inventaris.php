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
        Schema::table('inventaris', function (Blueprint $table) {
            $table->integer('tersedia')->default(0)->after('lokasi');
            $table->integer('terpinjam')->default(0)->after('tersedia');
            $table->integer('rusak')->default(0)->after('terpinjam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventaris', function (Blueprint $table) {
            //
            $table->dropColumn(['tersedia', 'terpinjam', 'rusak']);
        });
    }
};
