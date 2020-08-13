<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationInTbDare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_dare', function (Blueprint $table) {
            $table->integer('da_id')->unsigned()->change();
            $table->foreign('da_id')->references('id')->on('tb_da')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_dare', function (Blueprint $table) {
            $table->dropForeign('tb_dare_da_id_foreign');
        });
        Schema::table('tb_dare', function (Blueprint $table) {
            $table->dropIndex('tb_dare_da_id_foreign');
        });
        Schema::table('tb_dare', function (Blueprint $table) {
            $table->integer('da_id')->change();
        });
    }
}
