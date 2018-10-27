<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('d1')->nullable();
            $table->float('d2')->nullable();
            $table->float('d3')->nullable();
            $table->float('d4')->nullable();
            $table->float('e1')->nullable();
            $table->float('e2')->nullable();
            $table->float('e3')->nullable();
            $table->float('e4')->nullable();
            $table->float('e5')->nullable();
            $table->float('e6')->nullable();
            $table->float('l1')->nullable();
            $table->float('l2')->nullable();
            $table->float('t1')->nullable();
            $table->integer('total')->nullable();
            $table->integer('player_id')->nullable();
            $table->integer('item_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('points');
    }
}
