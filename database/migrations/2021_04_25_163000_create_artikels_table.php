<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->text('artikel_judul');
            $table->text('artikel_body');
            $table->text('artikel_slug');
            $table->text('artikel_status');
            $table->text('artikel_penulis');

            $table->unsignedBigInteger('gambar_id')->default(null)->nullable();
            $table->foreign('gambar_id')->references('id')->on('gambar')->onDelete('cascade');

            $table->unsignedBigInteger('login_id')->default(null)->nullable();
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->unsignedBigInteger('kategori_id')->default(null)->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
