<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vehicles_id');
            $table->unsignedBigInteger('zones_id');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->boolean('status');

            $table->foreign('vehicles_id')->references('id')->on('vehicles');
            $table->foreign('zones_id')->references('id')->on('zones');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allocations');
    }
}
