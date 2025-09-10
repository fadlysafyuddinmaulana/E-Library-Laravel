<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
Schema::create('penerbit', function (Blueprint $table) {
    $table->id('id_penerbit');
    $table->string('nama_penerbit', 100);
    $table->string('kota', 100); // tambahkan kolom kota
    $table->timestamps();
});

    }

    public function down()
    {
        Schema::dropIfExists('penerbit');
    }
};
