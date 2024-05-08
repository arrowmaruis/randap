<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domaines_expertise extends Model
{
    use HasFactory;
    
      /**
     * Les attributs de masse qui sont assignables.
     *
     * @var array
     */
    protected $fillable = [
        'domaine',
    ];

    public function userprofil()
    {
        return $this->hasOne(UserProfil::class);
    }
}
