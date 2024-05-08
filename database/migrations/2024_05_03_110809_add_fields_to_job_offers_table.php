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
        Schema::table('job_offers', function (Blueprint $table) {
            $table->string('company')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('expertise')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('logo');
            $table->dropColumn('email');
            $table->dropColumn('expertise');
        });
    }
};
