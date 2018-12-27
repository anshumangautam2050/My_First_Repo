<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_company')->nullable();
            $table->boolean('is_person')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->longText('description')->nullable();
            $table->string('subject')->nullable();
            $table->string('amount')->nullable();
            $table->string('min_price')->nullable();
            $table->string('type')->nullable();
            $table->boolean('processed')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
