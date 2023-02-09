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
        Schema::create('belongs_to', function (Blueprint $table) {

            $table->unsignedBigInteger("bookId");
            $table->unsignedBigInteger("secId");
            $table->timestamps();
            $table->foreign('bookId')->references('id')->on('Books')->onDelete('cascade');
            $table->foreign('secId')->references('secId')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belongs_to');
    }
};
