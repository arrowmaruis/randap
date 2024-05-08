<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffers extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'company',
        'email',
        'expertise',
        'required_skills',
        'closing_date',
        'job_description',
        'logo',
        'user_id', // Assurez-vous d'ajouter 'user_id' aux fillables
    ];

    
}
