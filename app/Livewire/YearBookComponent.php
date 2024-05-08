<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserProfil;

class YearBookComponent extends Component
{
    public $yearBook;
    public string $search = '';

    public function mount()
    {
        $this->yearBook = $this->fetchYearBook();
    }

    public function render()
    {
        return view('livewire.year-book-component');
    }

    public function updatedSearch()
    {
        $this->yearBook = $this->fetchYearBook();
    }
    public function filterYearBook()
    {
        $this->yearBook = $this->fetchYearBook();
    }


    protected function fetchYearBook()
    {
        return UserProfil::with(['user', 'statut', 'secteur', 'ndpClasse'])
            ->whereHas('user', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->get();
    }
}
