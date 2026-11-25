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
        Schema::create('tb_kunjungan', function (Blueprint $table)
        {
            $table->integer('id_kunjungan');
            $table->string('nama_pasien',100);
            $table->string('no_telepon',20);
            $table->text('keluhan')->nullable();
            $table->enum('status',['Menunggu','Selesai'])->default('Menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_kunjungan');
    }
};
