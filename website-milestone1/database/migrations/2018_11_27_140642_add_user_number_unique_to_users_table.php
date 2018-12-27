<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserNumberUniqueToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach(App\User::where('user_number','')->get() as $user){
            $user->update(['user_number'=>mt_rand(1111111,9999999)]);
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('user_number')->unique()->change();
            $table->dropUnique('users_id_number_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_user_number_unique');
            //$table->string('id_number')->unique()->change();
        });
    }
}
