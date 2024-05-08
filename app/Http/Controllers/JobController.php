<?php

namespace App\Http\Controllers;

use App\Models\JobOffers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): View
    {
        // Récupérer les offres d'emploi depuis la base de données
        $jobs = JobOffers::get();
        // Passer les offres d'emploi à la vue
        return view('job.index', ['jobs' => $jobs]);
    }

    public function details(int $id_job):View{

        $job = JobOffers::where('id',$id_job)->first();
        return view('job.detail', ['job' => $job]);
    }
}
