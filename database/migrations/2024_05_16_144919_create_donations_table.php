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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 255);
            $table->string('Prenoms', 255);
            $table->string('Nom_Societe', 255);
            $table->string('Email', 255);
            $table->string('Téléphone', 255);
            $table->tinyInteger('Autorisation')->default(0);
            $table->tinyInteger('Logo')->tinyInteger(0);
            $table->string('Date_transmission');
            $table->decimal('Montant_don', 10, 2)->nullable();
            $table->string('Mode_paiement', 255)->nullable();
            $table->string('Contact', 255)->nullable();
            $table->tinyInteger('received')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
