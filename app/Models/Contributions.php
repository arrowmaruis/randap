<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributions extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'amount', 'date', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
