<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubSliderImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_slider_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('president_id');
            $table->unsignedBigInteger('club_id');
            $table->integer('slider_no');
            $table->string('slider_image');
            $table->timestamps();

            $table->foreign('president_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_slider_images');
    }
}
