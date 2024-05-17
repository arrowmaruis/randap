<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('adhesion_requests', function (Blueprint $table) {
            $table->boolean('is_accepted')->default(false);
        });
    }

    public function down()
    {
        Schema::table('adhesion_requests', function (Blueprint $table) {
            $table->dropColumn('is_accepted');
        });
    }
};
