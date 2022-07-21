<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('president_id');
            $table->unsignedBigInteger('club_id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('venue')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('events');
    }
}
