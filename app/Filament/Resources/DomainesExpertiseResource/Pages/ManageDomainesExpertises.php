<?php

namespace App\Filament\Resources\DomainesExpertiseResource\Pages;

use App\Filament\Resources\DomainesExpertiseResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDomainesExpertises extends ManageRecords
{
    protected static string $resource = DomainesExpertiseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
