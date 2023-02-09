<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_write_book', function (Blueprint $table) {
            $table->unsignedBigInteger("bookId");
            $table->unsignedBigInteger("authId");
            $table->timestamps();
            $table->foreign('bookId')->references('id')->on('Books')->onDelete('cascade');
            $table->foreign('authId')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_write_book');
    }
};
