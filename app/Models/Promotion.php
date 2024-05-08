<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_of_promotion',
        'description',
    ];

    public function userprofil()
    {
        return $this->hasOne(UserProfil::class);
    }
}
