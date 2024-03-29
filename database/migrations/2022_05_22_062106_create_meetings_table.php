<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('president_id');
            $table->unsignedBigInteger('club_id');
            $table->text('title');
            $table->text('meeting_link');
            $table->text('meeting_id');
            $table->text('meeting_password');
            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('meetings');
    }
}
