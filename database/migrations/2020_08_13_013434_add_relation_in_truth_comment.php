<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationInTruthComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('truth_comment', function (Blueprint $table) {
            $table->integer('ut_id')->unsigned()->change();
            $table->foreign('ut_id')->references('id')->on('user_truth')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('truth_comment', function (Blueprint $table) {
            $table->dropForeign('truth_comment_ut_id_foreign');
        });

        Schema::table('truth_comment', function (Blueprint $table) {
            $table->dropIndex('truth_comment_ut_id_foreign');
        });

        Schema::table('truth_comment', function (Blueprint $table) {
            $table->integer('ut_id')->change();
        });
    }
}
