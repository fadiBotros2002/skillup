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
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('certificateID'); //  primary key and auto-increment
            $table->foreignId('userID')->constrained('users', 'userID');
            $table->foreignId('courseID')->constrained('courses', 'courseID');
            $table->foreignId('quizID')->constrained('quizes', 'quizID');
            $table->timestamp('issued_at')->nullable(); // adding issued_at column
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
