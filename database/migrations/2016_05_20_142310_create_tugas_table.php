<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tugas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->enum('priority', ['Low','Medium','High']);
          $table->string('check');
          // $table->string('start');
          // $table->string('finish');
          $table->string('progres');
          $table->string('content');
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
        Schema::drop('tugas');
    }
}
