<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->text('house_title');
            $table->integer('house_price');
            $table->text('house_description');
            $table->string('image');
            $table->string('gallery_image');
            $table->string('it_feature')->default(0);
            $table->integer('house_sqf');
            $table->integer('house_bed');
            $table->integer('house_bath');
            $table->integer('day_on_house');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('houses');
    }
};
