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
        Schema::create('features_items', function (Blueprint $table) {
            $table->id();
            $table->string('feature_itemTitle');
            $table->text('feature_itemSubtitle');
            $table->text('image');
            $table->tinyInteger('publication_status')->default('1')->comment('1=public,2=unPublic');
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
        Schema::dropIfExists('features_items');
    }
};
