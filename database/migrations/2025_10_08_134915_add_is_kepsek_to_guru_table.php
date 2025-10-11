<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('guru', function (Blueprint $table) {
            // Tambahkan kolom boolean untuk menandai Kepala Sekolah
            // Defaultnya false, hanya satu guru yang boleh true
            $table->boolean('is_kepsek')->default(false)->after('foto'); 
        });
    }

    public function down(): void
    {
        Schema::table('guru', function (Blueprint $table) {
            $table->dropColumn('is_kepsek');
        });
    }
};