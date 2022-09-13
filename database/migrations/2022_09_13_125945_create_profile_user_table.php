<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_user_id')->constrained()
                  ->onDelete('cascade');
            $table->string('profile_user_first_name');
            $table->string('profile_user_last_name');
            $table->string('profile_user_gender');
            $table->string('profile_user_street');
            $table->string('profile_user_streetnumber');
            $table->string('profile_user_postalcode');
            $table->string('profile_user_city');
            $table->string('profile_user_country');
            $table->string('profile_user_birthday');
            $table->string('profile_user_image')->nullable();
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
        Schema::dropIfExists('profile_user');
    }
}
