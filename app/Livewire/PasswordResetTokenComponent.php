<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class PasswordResetTokenComponent extends Component
{

    public $newPassword;
    public $confirmPassword;
    public $user;

    public function mount($email)
    {
        $this->user = User::where('email', $email)->first();
    }
    

    public function updatePassword()
    {
        $validator = Validator::make([
            'newPassword' => $this->newPassword,
            'confirmPassword' => $this->confirmPassword,
        ], [
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword',
        ], [
            'newPassword.required' => 'Le nouveau mot de passe est obligatoire.',
            'newPassword.min' => 'Le nouveau mot de passe doit contenir au moins :min caractères.',
            'confirmPassword.required' => 'La confirmation du mot de passe est obligatoire.',
            'confirmPassword.same' => 'La confirmation du mot de passe ne correspond pas au nouveau mot de passe.',
        ]);

        $validator->validate();

        if ($this->user ) {
            $this->user->password = Hash::make($this->newPassword);
            $this->user->save();
            session()->flash('successpass', 'Votre mot de passe a été mis à jour avec succès.');
        } else {
            session()->flash('errorpass', 'L\'ancien mot de passe que vous avez saisi est incorrect.');
        }
    }
    public function render()
    {
        return view('livewire.password-reset-token-component');
    }
}
