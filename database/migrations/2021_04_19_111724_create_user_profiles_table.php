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
            $table->integer('user_id');
            $table->text('bio');
            $table->string('category_id');
            $table->string('front_image');
            $table->string('back_image');
            $table->string('level_id')->default(1);
            $table->string('doctype');
            $table->string('country');
            $table->string('cv');
            $table->string('kra');
            $table->string('paypal_email');
            $table->boolean('completed')->default(0);
           


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
