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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('slider_title');
            $table->string('slider_title_two')->nullable();
            $table->text('slider_subtitle');
            $table->mediumText('slider_description');

            $table->text('background');
            $table->text('person');
            $table->text('icon1')->nullable();
            $table->text('icon2')->nullable();
            $table->text('icon3')->nullable();
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
        Schema::dropIfExists('sliders');
    }
};
