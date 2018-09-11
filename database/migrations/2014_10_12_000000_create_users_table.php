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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender', 6);
            $table->date('birthdate');
            $table->date('join_date')->nullable();
            $table->string('occupation', 100);
            $table->string('position', 20);
            $table->text('profile_picture')->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->string('twitter')->unique()->nullable();
            $table->string('linkedin')->unique()->nullable();
            $table->text('address');
            $table->integer('status')->default(0)->nullable();
            $table->string('verify_token')->nullable();
            $table->string('password');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
