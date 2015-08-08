<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingschedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkingsched', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parkingId')->unsigned();
            $table->foreign('parkingId')
            ->references('id')
            ->on('parking')
            ->onDelete('cascade');
            $table->timestamp('startDateTime');
            $table->timestamp('endDateTime');
            $table->boolean('isPaid')->default(false);
            $table->boolean('isCancelled')->default(false);
            $table->boolean('isOverdue')->default(false);
            $table->boolean('isTowed')->default(false);
            $table->index(['startDateTime','endDateTime']);
            $table->index(['isPaid','isCancelled']);
            $table->index(['isOverdue','isTowed']);
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
    }
}
