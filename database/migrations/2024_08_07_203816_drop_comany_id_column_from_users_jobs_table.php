<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users_jobs', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['company_id']);
            
            // Drop the column 'company_id'
            $table->dropColumn('company_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_jobs', function (Blueprint $table) {
            //
        });
    }
};
