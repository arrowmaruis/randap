<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginCompoenent extends Component
{

    public $email;
    public $password;
    public $isLoading = false;
    public function login()
    {
        // Validation des champs email et password avec des messages personnalisés
        $validator = Validator::make(
            [
                'email' => $this->email,
                'password' => $this->password,
            ],
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Le champ email est obligatoire.',
                'email.email' => 'Veuillez saisir une adresse email valide.',
                'password.required' => 'Le champ mot de passe est obligatoire.',
            ]
        );
    
        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            // Afficher les messages d'erreur de validation
            session()->flash('error', $validator->errors()->first());
            return;
        }
    
        // Tenter l'authentification de l'utilisateur
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
    
        $this->isLoading = true;
    
        if (Auth::attempt($credentials)) {
            session()->flash('succes', 'Connection reussi.');
            // Authentification réussie, redirigez l'utilisateur vers une page de son choix
            return redirect()->intended('/');
        } else {
            // Authentification échouée, affichez un message d'erreur
            session()->flash('error', 'Identifiants invalides. Veuillez réessayer.');
            $this->isLoading = false;
        }
    }
    
    public function render()
    {
        return view('livewire.login-compoenent');
    }
}
