<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Concerns\IsFilamentUser;


use Filament\Panel;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements FilamentUser


{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'promotion_id',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Dans le modèle User
    public function profile()
    {
        return $this->hasOne(UserProfil::class);
    }

    // Dans le modèle UserProfil

    // Dans le modèle User
    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function getInitialsAttribute()
    {
        $names = explode(' ', $this->name);
        $initials = '';

        foreach ($names as $name) {
            // Vérifie si le nom est vide avant de tenter d'accéder à son premier caractère
            if (!empty($name)) {
                $initials .= strtoupper($name[0]);
            }
        }

        return $initials;
    }

    public function contributions()
    {
        return $this->hasMany(Contributions::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        $user = Auth::user();

        if (!$user) {
            return false; // Handle the case where the user is not authenticated.
        }

        $roles = $user->role;

        if ($panel->getId() === 'admin' && ($roles == 'is_admin' )) {
            return true;
        }  else {
            return false; // Add the missing semicolon here
        }
    }
}
