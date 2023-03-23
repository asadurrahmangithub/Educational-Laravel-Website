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
        Schema::create('about_headers', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->text('about_subtitle');
            $table->mediumText('about_description');

            $table->text('text_one')->nullable();
            $table->text('text_second')->nullable();
            $table->text('text_third')->nullable();
            $table->text('text_four')->nullable();
            $table->text('text_five')->nullable();
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
        Schema::dropIfExists('about_headers');
    }
};
