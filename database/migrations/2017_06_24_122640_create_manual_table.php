<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManualTable extends Migration
{

    public function up()
    {
        Schema::create('data_manual', function ($table) {
            $table->increments('id');
            $table->text('aname')->comment('命令');
            $table->smallInteger('tid')->comment('手册id');
            $table->text('description')->comment('描述');
            $table->smallInteger('flag')->comment('标志')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('data_manual');
    }
}
