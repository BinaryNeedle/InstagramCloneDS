<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->updateOrInsert(
            [
                'username' => 'admin',
                'email' => 'admin@admin.com',
            ],
            [
                'password' => '$2y$10$99nwLHJcdq2Na.419MfGzO5SKKbaorw1boeFwoeSFYFZPO7fAgPWa',
                'name' => 'admin'
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
