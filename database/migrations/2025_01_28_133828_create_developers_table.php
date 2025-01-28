<?php
// Migration: database/migrations/create_developers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('x_handle')->nullable();
            $table->integer('years_experience_php');
            $table->integer('years_experience_other')->nullable();
            $table->boolean('is_employed_as_dev');
            $table->string('ide');
            $table->boolean('willing_to_appear_on_camera');
            $table->boolean('has_video_experience');
            $table->boolean('interested_in_learning_laravel');
            $table->integer('weekly_time_available');
            $table->string('learning_goal')->nullable();
            $table->string('php_framework_experience')->nullable();
            $table->text('learning_challenges')->nullable();
            $table->string('preferred_learning_method')->nullable();
            $table->string('desired_project_type')->nullable();
            $table->string('laravel_topics')->nullable();
            $table->text('struggles')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('developers');
    }
}
