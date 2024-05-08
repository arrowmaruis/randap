<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAccountComponent extends Component
{

    public $name;
    public $email;
    public $oldPassword;
    public $newPassword;
    public $confirmPassword;

    public function mount()
    {
        $user = auth()->user();

        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
        }
    }

    public function render()
    {
        return view('livewire.user-account-component');
    }

    public function updateName()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        // Mise à jour du nom de l'utilisateur
        $user = User::find(auth()->id());
        if ($user) {
            $user->name = $this->name;
            $user->save();
            session()->flash('success', 'Votre nom a été mis à jour avec succès.');
        }
    }

    public function updatePassword()
    {
        $this->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        $user = User::find(auth()->id());

        if ($user && Hash::check($this->oldPassword, $user->password)) {
            $user->password = Hash::make($this->newPassword);
            $user->save();
            session()->flash('successpass', 'Votre mot de passe a été mis à jour avec succès.');
        } else {
            session()->flash('errorpass', 'L\'ancien mot de passe que vous avez saisi est incorrect.');
        }
    }
}
