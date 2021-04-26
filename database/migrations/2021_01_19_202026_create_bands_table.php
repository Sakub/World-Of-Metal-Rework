<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description', 200);
            $table->text('logo_url');
            $table->text('image_url');
            $table->year('created_year');
            $table->year('broke_year')->nullable();
            $table->integer('albums_released');
            $table->integer('members_number');
            $table->unsignedBigInteger('nationality_id');
            $table->unsignedBigInteger('user_posted');
            $table->unsignedBigInteger('genre_id');
            $table->float('rating');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->foreign('user_posted')->references('id')->on('users');
            $table->foreign('genre_id')->references('id')->on('genres');
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
        Schema::dropIfExists('bands');
    }
}
