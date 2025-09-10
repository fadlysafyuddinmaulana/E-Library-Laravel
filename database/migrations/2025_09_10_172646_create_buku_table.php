<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('judul_buku', 60);
            $table->foreignId('id_kategori')->constrained('kategori', 'id_kategori');
            $table->foreignId('id_penerbit')->constrained('penerbit', 'id_penerbit');
            $table->string('pengarang', 25);
            $table->year('thn_terbit');
            $table->foreignId('id_lemari')->constrained('lemari', 'id_lemari');
            $table->string('isbn', 45);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
