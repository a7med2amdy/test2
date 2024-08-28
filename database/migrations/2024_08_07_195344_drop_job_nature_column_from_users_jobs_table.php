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
            // Drop the column 'job_nature' if it exists
            if (Schema::hasColumn('users_jobs', 'job_nature')) {
                $table->dropColumn('job_nature');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_jobs', function (Blueprint $table) {
            // Recreate the 'job_nature' column in its original state if needed
            $table->string('job_nature')->nullable(); // Example type and attributes, adjust as needed
        });
    }
};
