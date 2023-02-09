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
        Schema::create('publish', function (Blueprint $table) {
            $table->unsignedBigInteger("bookId");
            $table->unsignedBigInteger("publisherId");
            $table->timestamp("PostingTime");
            $table->foreign('bookId')->references('id')->on('Books')->onDelete('cascade');
            $table->foreign('publisherId')->references('publisherId')->on('publishers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publish');
    }
};
