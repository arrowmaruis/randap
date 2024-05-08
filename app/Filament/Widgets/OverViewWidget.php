<?php
namespace App\Filament\Widgets;

use App\Models\Articles;
use App\Models\User;
use App\Models\JobOffer;
use App\Models\JobOffers;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OverViewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        // Récupérer les statistiques
        $userCount = User::count();
        $jobOffersCount = JobOffers::count();
        $articlesCount = Articles::count();

        // Calculer les variations des statistiques
        $userCountChange = $this->calculateChange(User::class, 'created_at');
        $jobOffersCountChange = $this->calculateChange(JobOffers::class, 'created_at');
        $articlesCountChange = $this->calculateChange(Articles::class, 'created_at');

        return [
            Stat::make('Nombre d\'adhérents', $userCount)
                ->description($userCountChange['description'])
                ->descriptionIcon($userCountChange['icon'])
                ->color($userCountChange['color']),
            Stat::make('Nombre d\'offres d\'emploi', $jobOffersCount)
                ->description($jobOffersCountChange['description'])
                ->descriptionIcon($jobOffersCountChange['icon'])
                ->color($jobOffersCountChange['color']),
            Stat::make('Nombre d\'articles', $articlesCount)
                ->description($articlesCountChange['description'])
                ->descriptionIcon($articlesCountChange['icon'])
                ->color($articlesCountChange['color']),
        ];
    }

    protected function calculateChange($model, $column)
{
    // Calculer le changement
    $countBefore = $model::whereDate($column, '<', now()->subDays(7))->count();
    $countNow = $model::whereDate($column, '>=', now()->subDays(7))->count();

    // Vérifier si le dénominateur est zéro
    if ($countBefore == 0) {
        // Ajuster la logique ici pour traiter le cas où le dénominateur est zéro, par exemple, définir la variation à 0%
        return [
            'description' => '0% increase',
            'icon' => 'heroicon-m-information-circle',
            'color' => 'gray',
        ];
    }

    $percentageChange = ($countNow - $countBefore) / $countBefore * 100;

    // Déterminer l'icône et la couleur en fonction de la variation
    $icon = $percentageChange >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
    $color = $percentageChange >= 0 ? 'success' : 'danger';

    return [
        'description' => sprintf('%d%% increase', abs($percentageChange)),
        'icon' => $icon,
        'color' => $color,
    ];
}

}
