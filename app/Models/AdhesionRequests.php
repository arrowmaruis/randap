<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdhesionRequests extends Model
{
    use HasFactory , Notifiable;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenoms',
        'email',
        'telephone',
        'promotion',
        'message',
        'reference1',
        'reference2',
        'is_accepted',
    ];
}
