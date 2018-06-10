<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration 
{
	public function up()
	{
		Schema::create('photos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->year('year');
            $table->tinyinteger('month');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->text('description');
            $table->integer('reply_count')->unsigned()->default(0);
            $table->integer('last_reply_user_id')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('photos');
	}
}
