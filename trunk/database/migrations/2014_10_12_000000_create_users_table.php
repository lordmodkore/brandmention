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
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstname',100);
            $table->string('lastname',100);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company_name',100);
            $table->string('company_address',255);
            $table->string('language',40);
            $table->string('phone');
            $table->string('city');
            $table->string('postcode');
            $table->string('country');
            $table->string('vat_number');
            $table->string('paypal_username');
            $table->integer('status');
            $table->integer('verified')->default(0);
            $table->string('email_token');
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
