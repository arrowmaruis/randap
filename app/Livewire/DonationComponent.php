<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Donation;
use Illuminate\Support\Facades\DB;

class DonationComponent extends Component
{
    public $nom;
    public $Prenoms;
    public $societe;
    public $email;
    public $telephone;
    public $autorisation;
    public $logo;
    public $dateTransmission;
    public $montantDon;
    public $modePaiement;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.donation-component');
    }

    public function addDonation()
    {
        // Validation des données à ajouter
        $this->validate([
            'nom' => 'required',
            'Prenoms' => 'required',
            'societe' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'autorisation' => 'required',
            'logo' => 'required',
            'dateTransmission' => 'required',
            'montantDon' => 'required',
            'modePaiement' => 'required',
        ]);

        // Création d'une nouvelle donation
       $donation =  Donation::create([
            'Nom' => $this->nom,
            'Prenoms' => $this->Prenoms,
            'Nom_Societe' => $this->societe,
            'Email' => $this->email,
            'Telephone' => $this->telephone,
            'Autorisation' => $this->autorisation,
            'Logo' => $this->logo,
            'Date_transmission' => $this->dateTransmission,
            'Montant_don' => $this->montantDon,
            'Mode_paiement' => $this->modePaiement,
        ]);

        if ($donation) {
            DB::commit();
            session()->flash('success', 'Votre demande  a été soumise avec succès.');
        } else {
            DB::rollBack();
            session()->flash('error', 'Une erreur s\'est produite lors de la soumission de votre demande .');
        }

        // Effacer les valeurs du formulaire
        $this->reset();
    }
}
