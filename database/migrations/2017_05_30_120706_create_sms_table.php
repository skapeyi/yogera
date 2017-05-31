<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('type')->nullable();
            $table->string('messageId')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->string('aft_id')->nullable();
            $table->string('date')->nullable();
            $table->string('cost')->nullable();
        });

         //Logging for bulk sms 
        Schema::create('bulk_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message')->nullable();
            $table->text('recipients')->nullable();
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
        Schema::dropIfExists('sms');
    }
}
