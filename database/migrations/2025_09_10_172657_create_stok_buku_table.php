<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stok_buku', function (Blueprint $table) {
            $table->id('id_stok');
            $table->foreignId('id_buku')->constrained('buku', 'id_buku');
            $table->string('no_buku', 50);
            $table->foreignId('id_petugas')->nullable()->constrained('petugas', 'id_petugas');
            $table->foreignId('id_siswa')->nullable()->constrained('siswa', 'id_siswa');
            $table->enum('status', [1, 2]); // 1 = dipinjam, 2 = tersedia
            $table->date('tgl_rilis');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stok_buku');
    }
};
