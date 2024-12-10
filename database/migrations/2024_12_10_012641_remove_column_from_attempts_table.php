<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnFromAttemptsTable extends Migration
{
    public function up()
    {
        Schema::table('pulleds', function (Blueprint $table) {
            // Remove the specific column
            $table->dropColumn('toDate');
        });
    }

    public function down()
    {
        Schema::table('pulleds', function (Blueprint $table) {
            // Add the column back in case of rollback
            $table->string('toDate')->nullable();
        });
    }
}
