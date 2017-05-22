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
            $table->integer('gid');
            $table->string('name');
            $table->string('username');
            $table->string('mobile');
            $table->string('email');
            $table->tinyInteger('status');
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('tellNumber')->nullable();
            $table->string('img');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['id','gid']);
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
