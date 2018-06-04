<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('familyname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('fatherfull')->nullable();
            $table->string('motherfull')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->date('birthday')->nullable();
            $table->string('birthcity')->nullable();
            $table->string('birthcountry')->nullable();
            $table->date('weddingday')->nullable();
            $table->string('street')->nullable();
            $table->string('suburb')->nullable();
            $table->string('town')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('lastlogin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
