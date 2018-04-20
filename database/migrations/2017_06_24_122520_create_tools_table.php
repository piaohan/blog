<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{

    public function up()
    {
        Schema::create('data_tools', function ($table) {
            $table->increments('id');
            $table->string('tname')->comment('手册名');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('data_tools');
    }
}
