<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('comment', function (Blueprint $table) {
            $table->bigInteger('comment_id', true);
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->bigInteger('post_id')->index('post_id');
            $table->text('comment_text')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->bigInteger('like_id', true);
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->bigInteger('post_id')->index('post_id');
            $table->timestamp('created_at')->nullable()->useCurrent();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tokenable_type');
            $table->unsignedBigInteger('tokenable_id');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->index(['tokenable_type', 'tokenable_id']);
        });

        Schema::create('post', function (Blueprint $table) {
            $table->bigInteger('post_id', true);
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->text('caption');
            $table->string('image_url')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username', 25)->unique('username');
            $table->string('email')->unique();
            $table->text('bio')->nullable();
            $table->string('images')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('comment', function (Blueprint $table) {
            $table->foreign(['user_id'], 'comment_ibfk_1')->references(['id'])->on('users');
            $table->foreign(['post_id'], 'comment_ibfk_2')->references(['post_id'])->on('post');
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->foreign(['post_id'], 'likes_ibfk_1')->references(['post_id'])->on('post');
            $table->foreign(['user_id'], 'likes_ibfk_2')->references(['id'])->on('users');
        });

        Schema::table('post', function (Blueprint $table) {
            $table->foreign(['user_id'], 'post_ibfk_1')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropForeign('post_ibfk_1');
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign('likes_ibfk_1');
            $table->dropForeign('likes_ibfk_2');
        });

        Schema::table('comment', function (Blueprint $table) {
            $table->dropForeign('comment_ibfk_1');
            $table->dropForeign('comment_ibfk_2');
        });

        Schema::dropIfExists('users');

        Schema::dropIfExists('post');

        Schema::dropIfExists('personal_access_tokens');

        Schema::dropIfExists('password_reset_tokens');

        Schema::dropIfExists('likes');

        Schema::dropIfExists('failed_jobs');

        Schema::dropIfExists('comment');
    }
};
