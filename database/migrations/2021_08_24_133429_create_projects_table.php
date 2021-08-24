<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->boolean('taken')->default(0);
            $table->tinyInteger('approved')->nullable();
            $table->integer('freelancer_id')->nullable();
            $table->string('duration')->nullable();
            $table->integer('user_id');
            $table->boolean('submitted')->default(0);
            $table->boolean('paid')->default(0);
            $table->double('amount', 8, 2)->nullable();
            $table->double('freelancer_pay', 8, 2)->nullable();
            $table->string('file');
            $table->timestamp('time_taken')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('level_id');
            $table->string('title');
            $table->text('instructions');
            $table->boolean('rated')->default(0);
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
        Schema::dropIfExists('projects');
    }
}
