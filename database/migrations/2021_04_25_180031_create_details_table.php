<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->id();
            $table->string('detail_nama');
            $table->string('detail_nomor_registrasi')->nullable();
            $table->string('detail_telepon')->nullable();
            $table->string('detail_alamat')->nullable();
            $table->string('detail_jeniskelamin')->nullable();
            $table->string('detail_status')->default('ACTIVE');
            $table->string('detail_nama_ayah')->default(null)->nullable();
            $table->string('detail_nama_ibu')->default(null)->nullable();
            $table->string('detail_role')->default('guest');

            $table->unsignedBigInteger('kelas_id')->default(null)->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail');
    }
}
