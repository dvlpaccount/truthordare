<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationInTbUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_users', function (Blueprint $table) {
            $table->integer('sosmed_id')->unsigned()->change();
            $table->foreign('sosmed_id')->references('id')->on('tb_sosmed')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('level_id')->unsigned()->change();
            $table->foreign('level_id')->references('id')->on('tb_level')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_users', function(Blueprint $table) {
            $table->dropForeign('tb_users_sosmed_id_foreign');
        });
        Schema::table('tb_users', function(Blueprint $table) {
            $table->dropIndex('tb_users_sosmed_id_foreign');
        });
        Schema::table('tb_users', function(Blueprint $table) {
            $table->integer('sosmed_id')->change();
        });

        Schema::table('tb_users', function(Blueprint $table) {
            $table->dropForeign('tb_users_sosmed_id_foreign');
        });
        Schema::table('tb_users', function(Blueprint $table) {
            $table->dropIndex('tb_users_sosmed_id_foreign');
        });
        Schema::table('tb_users', function(Blueprint $table) {
            $table->integer('sosmed_id')->change();
        });
    }
}
