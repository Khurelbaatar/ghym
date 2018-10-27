<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('country_id');
            $table->string('number')->nullable();
            $table->date('birth')->nullable();
            $table->integer('item_id')->nullable();
            $table->string('photo')->nullable();
            $table->integer('point_id')->nullable();
            $table->integer('category_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
