<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Share extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share', function (Blueprint $table) {
            $table->integer('shareNumber');
            $table->integer('serialNumber');
            $table->primary('shareNumber');
            $table->foreign('serialNumber')->references('serialNumber')->on('transaction');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('share');
    }
}
