<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->boolean('deleted')->default(0);
            $table->boolean('approved')->default(0);
        });

        Schema::table('situations', function(Blueprint $table){
            $table->boolean('deleted')->default(0);
            $table->boolean('approved')->default(0);
            $table->integer('region_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->string('concerned_person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
