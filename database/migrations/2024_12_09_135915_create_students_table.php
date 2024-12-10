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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id'); // Primary Key
            $table->string('student_number', 20)->unique(); // Student number
            $table->string('first_name', 50); // First name
            $table->string('last_name', 50); // Last name
            $table->string('middle_name', 50)->nullable(); // Middle name (optional)
            $table->string('course', 50); // Enrolled course
            $table->year('year_enrolled'); // Enrollment year
            $table->tinyInteger('current_year_level'); // Current year level (1-4)
            $table->string('email', 100)->unique(); // School email address
            $table->string('phone_number', 15)->nullable(); // Contact number
            $table->text('address')->nullable(); // Permanent address
            $table->string('guardian_name', 100)->nullable(); // Guardian's name
            $table->string('guardian_phone', 15)->nullable(); // Guardian's phone
            $table->enum('status', ['Active', 'Inactive', 'Graduate'])->default('Active'); // Enrollment status
            $table->text('remarks')->nullable(); // Additional comments or notes
            $table->timestamps(); // Created and updated timestamps
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
