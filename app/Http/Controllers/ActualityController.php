<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ActualityController extends Controller
{
    public function index():View{

        $article = Articles::get();
        
        // Passer les offres d'emploi à la vue
        return view('actuality.index', ['article' => $article]);
    }

    public function details(int $id_article):View{

        $article = Articles::where('id',$id_article)->first();
        return view('actuality.detail', ['article' => $article]);
    }

    public function about():View{

        return view('about.about');
    }
    public function projet():View{

        return view('about.projet');
    }
    
    
    
}
