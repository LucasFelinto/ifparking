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
            $table->unsignedBigInteger('vehicle_id')->unique();
            $table->unsignedBigInteger('zone_id')->unique();
            $table->string('start');
            $table->string('end')->nullable();
            $table->boolean('status');

            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('zone_id')->references('id')->on('zones');
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
