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
        Schema::create('users_favs_cat', function (Blueprint $table) {
            $table->bigIncrements('userfavID'); //  primary key and auto-increment
            $table->foreignId('userID')->constrained('users', 'userID');
            $table->foreignId('CategoryID')->constrained('categories', 'CategoryID');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_favs_cat');

    }
};
