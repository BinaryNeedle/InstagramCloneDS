<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->foreign(['user_id'], 'comment_ibfk_1')->references(['id'])->on('users');
            $table->foreign(['post_id'], 'comment_ibfk_2')->references(['post_id'])->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->dropForeign('comment_ibfk_1');
            $table->dropForeign('comment_ibfk_2');
        });
    }
};
