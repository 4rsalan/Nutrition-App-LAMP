<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name', 100);
            $table->string('address', 100);
            $table->string('city', 30);
            $table->string('postal_code', 10);
            $table->string('school_board', 30);
            $table->string('school_id', 10);
            $table->string('breakfast', 15);
            $table->string('lunch', 15);
            $table->string('snack', 15);
            $table->boolean('hidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition');
    }
}
