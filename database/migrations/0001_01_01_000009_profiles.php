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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('profileID'); // المفتاح الأساسي وزيادة تلقائية
            $table->foreignId('userID')->constrained('users', 'userID'); // الربط بجدول users
            $table->string('bio')->nullable(); // سيرة ذاتية
            $table->string('profile_picture'); // صورة الملف الشخصي
            $table->date('birthdate'); // تاريخ الميلاد
            $table->string('phone'); // رقم الهاتف
            $table->timestamps(); // created_at و updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
