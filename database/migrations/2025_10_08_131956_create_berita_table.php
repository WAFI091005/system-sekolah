<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Ganti 'beritas' menjadi 'berita'
        Schema::create('berita', function (Blueprint $table) { 
            $table->id();

            // Identifikasi Tipe Berita
            $table->enum('type', ['internal', 'external'])->default('internal');
            
            // Kolom Dasar
            $table->string('title');
            $table->string('slug')->unique(); 
            $table->text('excerpt')->nullable();
            
            // Kolom Berita Internal
            $table->text('body')->nullable();
            $table->string('featured_image')->nullable();
            
            // Kolom Link Eksternal
            $table->string('external_url')->nullable(); 

            // Metadata
            $table->timestamp('published_at')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};