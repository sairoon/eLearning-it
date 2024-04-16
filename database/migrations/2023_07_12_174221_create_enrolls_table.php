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
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('student_id');
            $table->text('enroll_date')->nullable();
            $table->text('enroll_timestamp')->nullable();
            $table->string('payment_status')->default('Pending');
            $table->string('enroll_status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
