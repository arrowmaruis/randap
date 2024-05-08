<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'photo',
        'date_naissance',
        'ville_residence',
        'pays_residence',
        'nationalite',
        'numero_telephone',
        'classe_entree_ndp_id',
        'annee_entree_ndp',
        'classe_sortie_ndp_id',
        'annee_sortie_ndp',
        'statuts_professionnels_id',
        'diplome_certificat1',
        'domaines_expertise_id',
        'secteurs_activites_id',
        'acceptation_donnees_personnelles',
        'autorisation_direction_college',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    // Dans le modèle UserProfil
    public function statut()
    {
        return $this->belongsTo(statuts_professionnels::class, 'statuts_professionnels_id');
    }
    // Dans le modèle UserProfil
    public function secteur()
    {
        return $this->belongsTo(secteurs_activites::class, 'secteurs_activites_id');
    }

    
    // Dans le modèle UserProfil
    public function ndpClasse()
    {
        return $this->belongsTo(ndp_classes::class, 'classe_entree_ndp_id');
    }
}
