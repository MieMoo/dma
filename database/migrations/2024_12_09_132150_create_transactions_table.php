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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('student_no');
            $table->string('student_name');
            $table->string('course');
            $table->string('year_level');
            $table->text('purpose');
            $table->decimal('amount', 8, 2);
            $table->string('invoice_number');
            $table->string('document_type');
            $table->string('prioritization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
