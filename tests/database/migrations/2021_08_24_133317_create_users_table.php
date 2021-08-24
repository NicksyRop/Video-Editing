<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique('users_name_unique');
            $table->string('email')->unique('users_email_unique');
            $table->string('duty')->nullable();
            $table->boolean('status')->default(0);
            $table->string('avatar')->nullable();
            $table->tinyInteger('verified')->nullable();
            $table->boolean('p_submitted')->default(0);
            $table->boolean('t_submitted')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('messenger_color')->default('#2180f3');
            $table->boolean('dark_mode')->default(0);
            $table->boolean('active_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
