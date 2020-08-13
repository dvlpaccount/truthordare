<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationInUserTruth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_truth', function (Blueprint $table) {
            $table->integer('uq_id')->unsigned()->change();
            $table->foreign('uq_id')->references('id')->on('tb_users')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('ua_id')->unsigned()->change();
            $table->foreign('ua_id')->references('id')->on('tb_users')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('truth_id')->unsigned()->change();
            $table->foreign('truth_id')->references('id')->on('tb_truth')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_truth', function (Blueprint $table) {
            $table->dropForeign('user_truth_uq_id_foreign');
        });
        Schema::table('user_truth', function (Blueprint $table) {
            $table->dropIndex('user_truth_uq_id_foreign');
        });
        Schema::table('user_truth', function (Blueprint $table) {
            $table->integer('uq_id')->change();
        });


        Schema::table('user_truth', function (Blueprint $table) {
            $table->dropForeign('user_truth_ua_id_foreign');
        });
        Schema::table('user_truth', function (Blueprint $table) {
            $table->dropIndex('user_truth_ua_id_foreign');
        });
        Schema::table('user_truth', function (Blueprint $table) {
            $table->integer('ua_id')->change();
        });


        Schema::table('user_truth', function (Blueprint $table) {
            $table->dropForeign('user_truth_truth_id_foreign');
        });
        Schema::table('user_truth', function (Blueprint $table) {
            $table->dropIndex('user_truth_truth_id_foreign');
        });
        Schema::table('user_truth', function (Blueprint $table) {
            $table->integer('truth_id')->change();
        });
    }
}
