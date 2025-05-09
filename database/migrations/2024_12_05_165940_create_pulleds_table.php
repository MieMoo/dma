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
        Schema::create('pulleds', function (Blueprint $table) {
            $table->id();
            $table->string('studentNo');
            $table->string('studentName');
            $table->string('tcourse');
            $table->string('tlevel');
            $table->date('fromDate');
            $table->string('documentCategory');
            $table->text('descriptionRequest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulleds');
    }
};
