<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('url');
            $table->decimal('cost');
            $table->string('currency');
            $table->string('language');
            $table->string('f_n');
            $table->decimal('da');
            $table->string('tf');
            $table->string('cf');
            $table->string('sr_traffic');
            $table->string('pa');
            $table->string('moz_rank');
            $table->string('links');
            $table->string('equity');
            $table->string('alexa_rank');
            $table->string('a_links');
            $table->string('a_cnt');
            $table->string('a_cnt_rank');
            $table->string('sem_rush_domain');
            $table->string('sr_rank');
            $table->string('sr_keywords');
            $table->string('sr_costs');
            $table->string('sr_ulinks');
            $table->string('sr_hlinks');
            $table->string('sr_dlinks');
            $table->string('sf');
            $table->string('el');
            $table->string('ref_domains');
            $table->string('processing_time')->nullable();
            $table->string('example'))->nullable();
            $table->longText('note'))->nullable();
            $table->timestamps();
        });

        Schema::table('websites', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('websites');
    }
}
