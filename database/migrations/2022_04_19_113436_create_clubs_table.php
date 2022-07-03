<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('president_id');
            $table->string('name');
            $table->text('description');
            $table->string('category_name');
            $table->text('vision');
            $table->text('mission');
            $table->string('image');
            $table->boolean('approval')->nullable();
            $table->boolean('home_slider_approval')->nullable();
            $table->timestamps();

            $table->foreign('president_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
