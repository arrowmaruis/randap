<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterComponent extends Component
{
    public $promotionsItems;

    public $name;
    public $email;
    public $address;
    public $phone;
    public $promotion;
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
        'promotion.required' => 'Veuillez sélectionner une promotion.',
        'password.required' => 'Le champ mot de passe est requis.',
        'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
    ];
    public function mount()
    {
        $this->promotionsItems = \App\Models\Promotion::all();
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
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
        ]);
        // Connecter l'utilisateur nouvellement créé
        Auth::login($user);
        // Rediriger l'utilisateur vers une page appropriée
        return redirect('/');
    }
}
