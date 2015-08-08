<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('capacity')->unsigned();
            $table->string('floorDesc', 16);
            $table->integer('slotNumber')
            ->unsigned();
            $table->index(['capacity','slotNumber']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkingsched');
        Schema::dropIfExists('parking');
    }
}
