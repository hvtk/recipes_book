<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_profiles_id')->constrained()
                                                 ->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('street');
            $table->string('streetnumber');
            $table->string('postalcode');
            $table->string('city');
            $table->string('country');
            $table->string('birthday');
            $table->string('image')->nullable();
            $table->longText('information');
            $table->string('phonenumber')->nullable();
            $table->string('whatsappaddress')->nullable();
            $table->string('instagramaddress')->nullable();
            $table->string('facebookaddress')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
