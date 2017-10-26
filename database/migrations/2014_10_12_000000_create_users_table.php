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
            $table->integer('role_id')->index()->default(2);
            $table->integer('is_active')->default(0);
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->integer('telephone');
            $table->string('company')->nullable();
            $table->string('adress')->unique();
            $table->string('city');
            $table->integer('postcode');
            $table->string('password');
            $table->integer('policy_accepted')->default(0);
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
