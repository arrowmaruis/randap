<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;
use Carbon\Carbon;

class PasswordResetComponent extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    // Envoi de l'email de réinitialisation
    public function sendResetLink()
    {
        $this->validate(['email' => 'required|email']);

        $user = DB::table('users')->where('email', $this->email)->first();

        if ($user) {
            $token = Str::random(60);

            $existingReset = DB::table('password_reset_tokens')->where('email', $this->email)->first();

            if ($existingReset) {
                DB::table('password_reset_tokens')
                    ->where('email', $this->email)
                    ->update([
                        'token' => $token,
                        'created_at' => Carbon::now(),
                    ]);
            } else {
                DB::table('password_reset_tokens')->insert([
                    'email' => $this->email,
                    'token' => $token,
                    'created_at' => Carbon::now(),
                ]);
            }

            // $resetLink = url('/reset-password?token=' . $token . '&email=' . urlencode($this->email));
            $resetLink = route('password.reset', ['token' => $token]);

            // Envoyer le lien par email
            Mail::to($this->email)->send(new PasswordResetMail($resetLink));

            session()->flash('status', 'Le lien de réinitialisation a été envoyé par email.');
        } else {
            session()->flash('error', 'Aucun utilisateur trouvé avec cet email.');
        }
    }


    public function render()
    {
        return view('livewire.password-reset-component');
    }
}
