<?php

namespace App\Filament\Resources\StatutsProfessionnelsResource\Pages;

use App\Filament\Resources\StatutsProfessionnelsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStatutsProfessionnels extends ManageRecords
{
    protected static string $resource = StatutsProfessionnelsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
