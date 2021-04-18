<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginsTable extends Migration
{
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->id();
            $table->string('login_username');
            $table->string('login_password');
            $table->string('login_email');
            $table->text('login_token');
            $table->string('login_level');
            $table->string('login_status');

            $table->unsignedBigInteger('detail_id')->nullable();
            $table->foreign('detail_id')->references('id')->on('detail')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('login');
    }
}
