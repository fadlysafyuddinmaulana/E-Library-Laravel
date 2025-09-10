<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rent', function (Blueprint $table) {
            $table->id('id_rent');
            $table->foreignId('id_siswa')->constrained('siswa', 'id_siswa');
            $table->foreignId('id_stok')->constrained('stok_buku', 'id_stok');
            $table->foreignId('id_buku')->constrained('buku', 'id_buku');
            $table->foreignId('id_petugas')->constrained('petugas', 'id_petugas');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rent');
    }
};
