<?php

namespace App\Filament\Resources\JobOffersResource\Pages;

use App\Filament\Resources\JobOffersResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJobOffers extends ManageRecords
{
    protected static string $resource = JobOffersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
