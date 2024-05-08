<?php

namespace App\Filament\Resources\NdpClassesResource\Pages;

use App\Filament\Resources\NdpClassesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNdpClasses extends ManageRecords
{
    protected static string $resource = NdpClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
