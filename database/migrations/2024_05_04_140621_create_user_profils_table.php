<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  

    public function up()
    {
        Schema::create('user_profils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('photo')->nullable();
            $table->date('date_naissance');
            $table->string('ville_residence');
            $table->string('pays_residence');
            $table->string('nationalite');
            $table->string('numero_telephone');
            $table->foreignId('classe_entree_ndp_id')->constrained('ndp_classes');
            $table->date('annee_entree_ndp');
            $table->foreignId('classe_sortie_ndp_id')->constrained('ndp_classes');
            $table->date('annee_sortie_ndp');
            $table->foreignId('statuts_professionnels_id')->constrained('statuts_professionnels')->nullable();
            $table->string('fonction_actuelle')->nullable();
            $table->string('niveau_etudes');
            $table->string('diplome_certificat1');
            $table->string('entreprise')->nullable();
            $table->foreignId('domaines_expertise_id')->constrained('domaines_expertises')->nullable();
            $table->foreignId('secteurs_activites_id')->constrained('secteurs_activites')->nullable();
            $table->text('loisirs');
            $table->boolean('acceptation_donnees_personnelles');
            $table->boolean('autorisation_direction_college');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_profils');
    }
};
