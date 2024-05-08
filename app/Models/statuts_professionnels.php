<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statuts_professionnels extends Model
{
    use HasFactory;

      /**
     * Les attributs de masse qui sont assignables.
     *
     * @var array
     */
    protected $fillable = [
        'statut',
    ];


     // Dans le modèle UserProfil
     public function userprofil()
     {
         return $this->hasOne(UserProfil::class);
     }
}
