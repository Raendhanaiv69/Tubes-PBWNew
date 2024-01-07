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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->integer('id_isi_kursus');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('gender');
            $table->string('nomor_hp');
            $table->string('alamat');
            $table->string('pembayaran');
            $table->date('tanggal_kursus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
