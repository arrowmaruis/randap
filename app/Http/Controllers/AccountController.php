<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AccountController extends Controller
{
    public function chat(): View
    {
        return view('account.chat');
    }
    public function yearbook(): View
    {
        $user = auth()->user();

        if (!$user) {
            // Redirigez l'utilisateur s'il n'est pas connecté
            return redirect()->route('login');
        }

        // Supposons que vous avez un modèle UserProfile associé au modèle User
        // via une relation hasOne ou hasMany.
        $userProfile = $user->profile;

        if (!$userProfile || !$this->hasProfileDetails($userProfile)) {
            // Redirigez l'utilisateur ou afficher un message indiquant que le profil est incomplet
            return redirect()->route('account.yearbook');
        }

        return view('account.yearbook', ['userProfile' => $userProfile]);
    }
    public function account(): View
    {
        return view('account.index');
    }

    public function userProfile(): View
    {

        return view('account.user-profile');
    }
    private function hasProfileDetails($profile): bool
    {
        return !empty($profile->user_id) && !empty($profile->date_naissance) && !empty($profile->numero_telephone);
    }
}
