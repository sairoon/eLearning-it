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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id')->nullable();
            $table->string('course_title');
            $table->integer('lecture')->nullable();
            $table->string('course_duration')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->tinyInteger('course_level')->default(1);
            $table->integer('course_fee')->nullable();
            $table->integer('course_discount')->nullable();
            $table->string('discounted_fee')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
