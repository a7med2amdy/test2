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
        Schema::create('users_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('job_nature', ['full_time', 'part_time', 'remotely', 'freelance'])->default('full_time');
            $table->string('vacancy')->nullable();
            $table->string('salary')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->string('benefits')->nullable();
            $table->string('responsibility')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('keywords')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_jobs');
    }
};
