<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->char('id', 5);
            $table->integer('serialNumber');
            $table->string('type');
            $table->integer('amount')->unsigned();
            $table->timestamp('datetime');
            $table->primary('serialNumber');
            $table->foreign('id')->references('id')->on('stockholder');

        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
