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
        Schema::create('subnavbars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('navbar_id');
            $table->foreign('navbar_id')->references('id')->on('navbars')->cascadeOnDelete();
            $table->string('sub_navbar_name')->nullable();
            $table->text('sub_navbar_link')->nullable();
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
        Schema::dropIfExists('subnavbars');
    }
};
