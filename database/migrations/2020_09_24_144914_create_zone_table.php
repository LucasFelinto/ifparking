<?php

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone', function(Blueprint $table)  {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->boolean('status');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zone');
    }