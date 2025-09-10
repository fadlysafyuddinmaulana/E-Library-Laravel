<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('id_petugas');
            $table->string('nama_petugas', 50);
            $table->string('agama', 20);
            $table->enum('jk', ['L', 'P']);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir', 50);
            $table->string('email', 50)->unique();
            $table->string('foto_petugas', 100)->nullable();
            $table->integer('active')->default(1); // 🔥 ganti dari boolean ke integer
            $table->string('username', 50)->unique();
            $table->string('password', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('petugas');
    }
};
