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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('commentID'); // primary key and auto-increment
            $table->text('content');
            $table->foreignId('userID')->constrained('users', 'userID'); // الربط بجدول users
            $table->foreignId('courseID')->constrained('courses', 'courseID');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');

    }
};
