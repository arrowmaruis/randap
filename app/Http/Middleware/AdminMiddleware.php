<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est connecté
        if (!Auth::check()) {
            // Redirige vers la page de connexion ou renvoie une erreur 403 si non connecté
            return $next($request);

        }

        // Vérifie si l'utilisateur a le rôle d'admin
        if (Auth::user()->role !== 'admin') {
            // Retourne une réponse 403 si l'utilisateur n'est pas admin
            // abort(403, 'Accès interdit');
            return redirect()->route('welcome');
        }

        // L'utilisateur est connecté et est admin, on laisse passer la requête
        return $next($request);
    }
}
