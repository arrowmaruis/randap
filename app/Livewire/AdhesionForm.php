<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
use App\Models\Promotion;
use App\Models\AdhesionRequests;
use Illuminate\Support\Facades\DB;

class AdhesionForm extends Component
{
    public $nom;
    public $prenoms;
    public $email;
    public $telephone;
    public $promotion;
    public $message;
    public $promotions_years = []; // Utilisez une variable pour stocker les promotions

    public function mount()
    {
        $this->promotions_years = Promotion::all(); // Assurez-vous d'initialiser cette variable
    }

    protected $rules = [
        'nom' => 'required|string|max:255',
        'prenoms' => 'required|string|max:255',
        'email' => 'required|email|unique:adhesion_requests,email',
        'telephone' => 'required|string|max:20',
        'promotion' => 'required|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            $adhesionRequest = AdhesionRequests::create([
                'nom' => $this->nom,
                'prenoms' => $this->prenoms,
                'email' => $this->email,
                'telephone' => $this->telephone,
                'promotion' => $this->promotion,
                'message' => $this->message,
            ]);

            if ($adhesionRequest) {
                DB::commit();
                session()->flash('success', 'Votre demande d\'adhésion a été soumise avec succès.');
            } else {
                DB::rollBack();
                session()->flash('error', 'Une erreur s\'est produite lors de la soumission de votre demande d\'adhésion.');
            }
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Une erreur s\'est produite: ' . $e->getMessage());
        }

        $this->reset();
        $this->promotions_years = Promotion::all(); // Assurez-vous d'initialiser cette variable

    }

    public function render()
    {
        return view('livewire.adhesion-form');
    }
}
