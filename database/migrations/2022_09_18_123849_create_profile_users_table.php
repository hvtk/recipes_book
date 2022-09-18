<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_users_id')->constrained()
                  ->onDelete('cascade');
            $table->string('profile_users_first_name');
            $table->string('profile_users_last_name');
            $table->string('profile_users_gender');
            $table->string('profile_users_street');
            $table->string('profile_users_streetnumber');
            $table->string('profile_users_postalcode');
            $table->string('profile_users_city');
            $table->string('profile_users_country');
            $table->string('profile_users_birthday');
            $table->string('profile_users_image')->nullable();
            $table->longText('profile_users_information');
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
        Schema::dropIfExists('profile_users');
    }
}
