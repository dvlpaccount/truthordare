<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbDare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dare', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->text('photo');
            $table->string('link')->nullable();
            $table->string('status');
            $table->integer('not_answer');
            $table->string('reason');
            $table->integer('da_id');
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
        //
    }
}
