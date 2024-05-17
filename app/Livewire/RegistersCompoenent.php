<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistersCompoenent extends Component
{

    public $promotionsItems;

    public $name;
    public $email;

    public $sentEmail;
   
    public $password;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ];


    protected $messages = [
        'name.required' => 'Le champ nom est requis.',
        'name.max' => 'Le champ nom ne doit pas dépasser :max caractères.',
        'email.required' => 'Le champ email est requis.',
        'email.email' => 'Veuillez saisir une adresse email valide.',
        'email.unique' => 'Cette adresse email est déjà utilisée.',
        'password.required' => 'Le champ mot de passe est requis.',
        'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
    ];
    public function mount($sentEmail, $name)
    {
        $this->promotionsItems = \App\Models\Promotion::all();
        $this->email = $sentEmail;
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.registers-compoenent');
    }

    public function register()
    {
        $this->validate();

        // Créer un nouvel utilisateur
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        // Connecter l'utilisateur nouvellement créé
        Auth::login($user);
        // Rediriger l'utilisateur vers une page appropriée
        return redirect('/');
    }
}
