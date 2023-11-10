<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->updateOrInsert(
            [
                'user_id' => '1',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi deserunt sequi tenetur itaque quod recusandae! Officia sit iste, illo facilis, animi fugiat magnam suscipit, quam doloribus voluptatum perspiciatis mollitia incidunt.',
                'image_url' => 'http://localhost:8000/assets/imgs/post/wind.jpg',
                'created_at' => Carbon\Carbon::now(),
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post', function (Blueprint $table) {
            //
        });
    }
};