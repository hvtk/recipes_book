<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_title');
            $table->string('recipe_section');
            $table->longText('kitchenware');
            $table->string('ingredients');
            $table->longText('recipe_the_steps_to_follow');
            $table->string('recipe_estimated_time');
            $table->string('recipe_image_end_result');
            $table->string('recipe_shelf_life');
            $table->longText('recipe_commentary');
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
        Schema::dropIfExists('recipes');
    }
}
