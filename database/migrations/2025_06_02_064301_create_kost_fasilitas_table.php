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
        // Tabel Pivot Kost-Fasilitas
        Schema::create('kost_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kost');
            $table->unsignedBigInteger('id_fasilitas');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_kost')->references('id')->on('kosts')->onDelete('cascade');
            $table->foreign('id_fasilitas')->references('id')->on('fasilitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kost_fasilitas');
    }
};
