<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',45);
            $table->string('email',45);
            $table->string('password',45);
            $table->string('nama',45);
        });

        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('umur',25);
            $table->string('bio',25);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
        });

        Schema::create('genre', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',45);
            $table->timestamps();
        });

        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul',45);
            $table->string('ringkasan',45);
            $table->string('tahun',45);
            $table->string('poster',45);
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre');
            $table->timestamps();
        });

        Schema::create('cast', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',45);
            $table->string('umur',45);
            $table->text('bio');
        });

        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('cast_id');
            $table->string('nama',45);;
            $table->foreign('film_id')->references('id')->on('film');
            $table->foreign('cast_id')->references('id')->on('cast');
        });

        Schema::create('kritik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('film_id');
            $table->text('isi');
            $table->integer('point');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('film_id')->references('id')->on('film');
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
        Schema::dropIfExists('user');
        Schema::dropIfExists('profile');
        Schema::dropIfExists('film');
        Schema::dropIfExists('genre');
        Schema::dropIfExists('cast');
        Schema::dropIfExists('peran');
        Schema::dropIfExists('kritik');
    }
}
