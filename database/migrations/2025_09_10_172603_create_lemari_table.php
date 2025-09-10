<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lemari', function (Blueprint $table) {
            $table->id('id_lemari');
            $table->string('nama_lemari', 100);
            $table->string('lokasi', 100)->nullable(); // biar boleh kosong
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lemari');
    }
};
