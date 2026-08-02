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
        Schema::create('settings', function (Blueprint $table) {

            $table->id();

            // Identitas Website
            $table->string('company_name');
            $table->string('logo')->nullable();

            // Hero
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();

            // Tentang Kami
            $table->longText('about')->nullable();

            // Kontak
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();

            // Jam Operasional
            $table->string('open_days')->nullable();
            $table->string('open_hours')->nullable();
            $table->string('holiday')->nullable();

            // Sosial Media
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();

            // Google Maps Embed
            $table->longText('maps')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};