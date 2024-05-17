<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_sent_emails_table extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'adhesion_request_id',
        'email',
        'token',
        'expires_at',
    ];
}
