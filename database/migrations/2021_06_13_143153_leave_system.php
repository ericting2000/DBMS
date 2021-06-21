<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeaveSystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaveSystem', function (Blueprint $table) {
            $table->char('id', 5);
            $table->string('name');
            $table->string('leaveReason');
            $table->timestamp('dateStart');
            $table->timestamp('dateEnd');
            $table->primary(['id', 'dateStart', 'dateEnd']);
            $table->foreign('id')->references('id')->on('employee');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaveSystem');
    }
}
