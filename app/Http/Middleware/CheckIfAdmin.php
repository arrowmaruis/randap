<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        // Vérifiez si l'utilisateur est authentifié et s'il est un administrateur
        if (!$user || !$user->is_admin) {
            // Redirigez l'utilisateur ou retournez une réponse appropriée
            return redirect('/')->with('error', 'Accès non autorisé');
        }

        return $next($request);
    }
}
