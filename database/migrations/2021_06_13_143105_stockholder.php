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
            $table->string('name');
            $table->char('birth', 8);
            $table->char('phoneNumber', 9);
            $table->string('address');
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
