<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
//            $table->engine = 'Innodb';
//            $table->charset = 'UTF8';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('url', 512);
            $table->integer('position')->nullable();
            $table->boolean('is_hidden')->default(false);
            $table->integer('user_id');
            $table->string('area_code', 32);
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
        Schema::drop('photos');
    }
}
