<?php

namespace App\Filament\Resources\SecteursActivitesResource\Pages;

use App\Filament\Resources\SecteursActivitesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSecteursActivites extends ManageRecords
{
    protected static string $resource = SecteursActivitesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
