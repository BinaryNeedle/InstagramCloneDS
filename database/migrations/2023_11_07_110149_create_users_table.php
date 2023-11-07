<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 25)->unique('username');
            $table->text('bio')->nullable();
            $table->string('images')->nullable();
        });

        // Add new data
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$99nwLHJcdq2Na.419MfGzO5SKKbaorw1boeFwoeSFYFZPO7fAgPWa',
            'name' => 'admin'
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
