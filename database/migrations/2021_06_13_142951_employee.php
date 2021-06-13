<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->char('id', 5);
            $table->string('name');
            $table->char('birth', 8);
            $table->char('cellPhone', 9);
            $table->char('localPhone', 8);
            $table->string('email');
            $table->string('gender');
            $table->string('title');
            $table->timestamp('onBoardTime');
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
        Schema::dropIfExists('employee');
    }
}
