<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationInDareComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dare_comment', function (Blueprint $table) {
            $table->integer('ud_id')->unsigned()->change();
            $table->foreign('ud_id')->references('id')->on('user_dare')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dare_comment', function (Blueprint $table) {
            $table->dropForeign('dare_comment_ud_id_foreign');
        });
        Schema::table('dare_comment', function (Blueprint $table) {
            $table->dropIndex('dare_comment_ud_id_foreign');
        });
        Schema::table('dare_comment', function (Blueprint $table) {
            $table->integer('ud_id')->change();
        });
    }
}
