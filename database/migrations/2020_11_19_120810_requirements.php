<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Requirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('local')->create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->foreignId('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreignId('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status');
            $table->longText('message');
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
        Schema::connection('local')->dropIfExists('requirements');
    }
}
