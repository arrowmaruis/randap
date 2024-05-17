<?php

namespace App\Filament\Resources\AdhesionRequestResource\Pages;

use App\Filament\Resources\AdhesionRequestResource;
use App\Models\AdhesionRequests;
use Filament\Actions;

use App\Notifications\AdhesionAccepted;
use Filament\Resources\Pages\ManageRecords;

class ManageAdhesionRequests extends ManageRecords
{
    protected static string $resource = AdhesionRequestResource::class;

   
}
