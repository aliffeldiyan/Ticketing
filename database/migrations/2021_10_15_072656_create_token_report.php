<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_report', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInterger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('platform');
            $table->string('kategori');
            $table->string('sub-kategori');
            $table->string('deskripsi');
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
        Schema::dropIfExists('token_report');
    }
}
