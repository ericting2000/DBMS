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
            $table->string('leaveReason');
            $table->timestamp('date');
            $table->primary(['id', 'date']);
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
