<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdhesionRequests;
use App\Models\create_sent_emails_table;

class AdhesionController extends Controller
{
    public function finalize($token)
    {
        $sentEmail = create_sent_emails_table::where('token', $token)->where('expires_at', '>', now())->firstOrFail();
        $User = AdhesionRequests::where('email', $sentEmail->email)->first();

        // Ajoutez ici la logique pour finaliser l'adhésion

        return view('auth.signup', ['email' => $sentEmail->email, 'name' => $User->nom.' '.$User->prenoms]);
    }
}
