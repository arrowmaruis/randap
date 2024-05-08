<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Promotion;
use App\Models\UserProfil;
use App\Models\ndp_classes;
use Livewire\WithFileUploads;
use App\Models\domaines_expertise;
use App\Models\secteurs_activites;
use App\Models\statuts_professionnels;

class UserProfilComponent extends Component
{

    use WithFileUploads; // Utilisez le trait WithFileUploads

    public $classe_entree_ndp;
    public $classe_sortie_ndp;
    public $statuts_professionnels;
    public $domaines_expertise;
    public $secteurs_activites;
    public $promotion;

    public $niveaux_etudes;

    public $liste_pays;

    public $user_id;
    public $photo;
    public $date_naissance;
    public $ville_residence;
    public $pays_residence;
    public $nationalite;
    public $numero_telephone;
    public $classe_entree_ndp_id;
    public $annee_entree_ndp;
    public $classe_sortie_ndp_id;
    public $annee_sortie_ndp;
    public $statuts_professionnels_id;
    public $diplome_certificat1;
    public $domaines_expertise_id;
    public $secteurs_activites_id;

    public function mount()
    {
        $user = auth()->user();
        $this->classe_entree_ndp = ndp_classes::all();
        $this->classe_sortie_ndp = ndp_classes::all();

        $this->statuts_professionnels = statuts_professionnels::all();
        $this->domaines_expertise = domaines_expertise::all();

        $this->secteurs_activites = secteurs_activites::all();
        $this->promotion = Promotion::all();


        $this->niveaux_etudes = [
            'Primaire',
            'Collège',
            'Lycée',
            'Baccalauréat',
            'BTS',
            'Licence 1',
            'Licence 2',
            'Licence 3',
            'Master 1',
            'Master 2',
            'Doctorat',
            'Certification professionnelle',
        ];
        $this->liste_pays = [
            'Afghanistan', 'Albanie', 'Algérie', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua-et-Barbuda',
            'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahreïn', 'Bangladesh',
            'Barbade', 'Bélarus', 'Belgique', 'Belize', 'Bénin', 'Bermudes', 'Bhoutan', 'Bolivie', 'Bonaire, Saint-Eustache et Saba',
            'Bosnie-Herzégovine', 'Botswana', 'Brésil', 'Brunéi Darussalam', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cabo Verde',
            'Cambodge', 'Cameroun', 'Canada', 'Chili', 'Chine', 'Colombie', 'Comores', 'Congo', 'Costa Rica', 'Côte d’Ivoire',
            'Croatie', 'Cuba', 'Curaçao', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'Émirats arabes unis', 'Équateur',
            'Érythrée', 'Espagne', 'Eswatini', 'État de la Cité du Vatican', 'États fédérés de Micronésie', 'États-Unis',
            'Éthiopie', 'Fidji', 'Finlande', 'France', 'Gabon', 'Gambie', 'Géorgie', 'Ghana', 'Gibraltar', 'Grèce', 'Grenade',
            'Groenland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernesey', 'Guinée', 'Guinée équatoriale', 'Guinée-Bissau',
            'Guyana', 'Guyane française', 'Haïti', 'Honduras', 'Hongrie', 'Île Bouvet', 'Île Christmas', 'Île de Man',
            'Île Norfolk', 'Îles Åland', 'Îles Caïmans', 'Îles Cook', 'Îles Féroé', 'Îles Heard et McDonald', 'Îles Malouines',
            'Îles Mariannes du Nord', 'Îles Marshall', 'Îles Pitcairn', 'Îles Salomon', 'Îles Turques-et-Caïques',
            'Îles Vierges britanniques', 'Îles Vierges des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande',
            'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jersey', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan',
            'Kiribati', 'Koweït', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Liberia', 'Libye', 'Liechtenstein', 'Lituanie',
            'Luxembourg', 'Macao', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives', 'Mali', 'Malte', 'Maroc', 'Martinique',
            'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Monaco', 'Mongolie', 'Monténégro', 'Montserrat', 'Mozambique',
            'Myanmar', 'Namibie', 'Nauru', 'Népal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norvège', 'Nouvelle-Calédonie',
            'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palaos', 'Panama', 'Papouasie-Nouvelle-Guinée',
            'Paraguay', 'Pays-Bas', 'Pérou', 'Philippines', 'Pitcairn', 'Pologne', 'Polynésie française', 'Porto Rico',
            'Portugal', 'Qatar', 'République arabe sahraouie démocratique', 'République centrafricaine', 'République de Corée',
            'République de Moldova', 'République démocratique du Congo', 'République dominicaine', 'République populaire démocratique de Corée',
            'République tchèque', 'Réunion', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Sahara occidental', 'Saint-Barthélemy',
            'Sainte-Hélène', 'Sainte-Lucie', 'Saint-Kitts-et-Nevis', 'Saint-Marin', 'Saint-Martin', 'Saint-Pierre-et-Miquelon',
            'Saint-Vincent-et-les-Grenadines', 'Samoa', 'Samoa américaines', 'Sao Tomé-et-Principe', 'Sénégal', 'Serbie',
            'Seychelles', 'Sierra Leone', 'Singapour', 'Sint Maarten', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Soudan du Sud',
            'Sri Lanka', 'Suède', 'Suisse', 'Suriname', 'Svalbard et Île Jan Mayen', 'Syrie', 'Tadjikistan', 'Taïwan', 'Tanzanie',
            'Tchad', 'Terres australes françaises', 'Territoire britannique de l\'océan Indien', 'Territoire palestinien',
            'Thaïlande', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinité-et-Tobago', 'Tunisie', 'Turkménistan', 'Turquie',
            'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Venezuela', 'Viêt Nam', 'Wallis-et-Futuna', 'Yémen', 'Zambie', 'Zimbabwe'
        ];


        if ($user) {
            $this->user_id = $user->id;
        }

        if ($user) {
            // Récupère le profil utilisateur s'il existe
            $userProfile = UserProfil::where('user_id', $user->id)->first();
    
            if ($userProfile) {
                // Affecte les valeurs des données enregistrées aux champs correspondants
                $this->photo = $userProfile->photo;
                $this->date_naissance = $userProfile->date_naissance;
                $this->ville_residence = $userProfile->ville_residence;
                $this->pays_residence = $userProfile->pays_residence;
                $this->nationalite = $userProfile->nationalite;
                $this->numero_telephone = $userProfile->numero_telephone;
                $this->classe_entree_ndp_id = $userProfile->classe_entree_ndp_id;
                $this->annee_entree_ndp = $userProfile->annee_entree_ndp;
                $this->classe_sortie_ndp_id = $userProfile->classe_sortie_ndp_id;
                $this->annee_sortie_ndp = $userProfile->annee_sortie_ndp;
                $this->statuts_professionnels_id = $userProfile->statuts_professionnels_id;
                $this->diplome_certificat1 = $userProfile->diplome_certificat1;
                $this->domaines_expertise_id = $userProfile->domaines_expertise_id;
                $this->secteurs_activites_id = $userProfile->secteurs_activites_id;
            }
        }
    }
    public function render()
    {
        return view('livewire.user-profil-component');
    }

    public function save()
    {
        // Validation des données
        $validatedData = $this->validate([
            'user_id' => 'required',
            'photo' => 'nullable',
            'date_naissance' => 'required|date',
            'ville_residence' => 'required|string',
            'pays_residence' => 'required|string',
            'nationalite' => 'required|string',
            'numero_telephone' => 'required|string',
            'classe_entree_ndp_id' => 'required|integer',
            'annee_entree_ndp' => 'required',
            'classe_sortie_ndp_id' => 'required|integer',
            'annee_sortie_ndp' => 'required',
            'statuts_professionnels_id' => 'required|integer',
            'diplome_certificat1' => 'required|string',
            'domaines_expertise_id' => 'nullable|integer',
            'secteurs_activites_id' => 'nullable|integer',
        ]);

        try {
            // Vérifie si un profil utilisateur existe pour cet utilisateur
            $userProfile = UserProfil::where('user_id', $this->user_id)->first();

            if ($userProfile) {
                // Met à jour le profil utilisateur existant
                $userProfile->update($validatedData);
            } else {

                UserProfil::create($validatedData);
            }
            session()->flash('success', 'Les informations sur votre profil ont été ajoutées avec succès.');
        } catch (\Exception $e) {
            // Gérer l'erreur, par exemple en affichant un message d'erreur
            session()->flash('error', 'Une erreur s\'est produite lors de la sauvegarde du profil.');
            return redirect()->back();
        }
    }
}