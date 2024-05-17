<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Prenoms',
        'Nom_Societe',
        'Email',
        'Telephone',
        'Autorisation',
        'Logo',
        'Date_transmission',
        'Montant_don',
        'Mode_paiement',
    ];
}
