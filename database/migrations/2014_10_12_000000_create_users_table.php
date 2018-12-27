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
            $table->string('user_number')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('id_number')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->boolean('is_freq_seller')->nullable();
            $table->boolean('is_curator')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
