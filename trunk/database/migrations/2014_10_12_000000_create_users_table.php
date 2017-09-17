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
            $table->string('password')->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('company_address',255)->nullable();
            $table->string('language',40)->nullable();
            $table->string('phone')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('paypal_username')->nullable();
            $table->integer('status')->default(1);
            $table->integer('verified')->default(0);
            $table->string('email_token')->nullable();
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
