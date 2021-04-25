<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarsTable extends Migration
{
    public function up()
    {
        Schema::create('gambar', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_nama');
            $table->text('gambar_lokasi');
            $table->string('gambar_tipe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gambar');
    }
}
