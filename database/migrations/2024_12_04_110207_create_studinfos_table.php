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
        Schema::create('studinfos', function (Blueprint $table) {
            $table->id();
            $table->string('studentno');
            $table->string('documentname');
            $table->string('categ');   
            $table->string('studentname');
            $table->string('actions');      
            $table->text('descriptions');  
            $table->string('uploaders'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studinfos');
    }
};
