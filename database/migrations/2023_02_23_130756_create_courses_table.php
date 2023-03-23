<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('button_1')->nullable();
            $table->string('button_2')->nullable();
            $table->longText('course_description');
            $table->string('technology');
            $table->integer('cost');
            $table->integer('total_cost');
            $table->integer('semester');
            $table->integer('student');
            $table->text('image');
            $table->tinyInteger('publication_status')->default('1');
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
        Schema::dropIfExists('courses');
    }
};
