<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stockholder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockholder', function (Blueprint $table) {
            $table->char('id', 5);
            $table->string('password');
            $table->string('company');
            $table->string('title');
            $table->string('name');
            $table->char('birth', 8);
            $table->char('phoneNumber', 10);
            $table->string('address');
            $table->integer('share')->default(0);
            $table->integer('lot')->default(0);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockholder');
    }
}
