<?php
namespace App\Filament\Resources\AdhesionRequestResource\Pages;

use App\Filament\Resources\AdhesionRequestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\AdhesionRequest;
use App\Models\AdhesionRequests;
use App\Notifications\AdhesionAccepted;

class ListAdhesionRequests extends ListRecords
{
    protected static string $resource = AdhesionRequestResource::class;

    // protected function getActions(): array
    // {
    //     return [
    //         Actions\Action::make('accept')
    //             ->label('Accepter')
    //             ->icon('heroicon-o-check')
    //             ->action(function (AdhesionRequests $record) {
    //                 $record->update(['is_accepted' => true]);
    //                 $record->notify(new AdhesionAccepted());
    //                 session()->flash('success', 'La demande d\'adhésion a été acceptée et un email a été envoyé.');
    //             })
    //             ->color('success'),
    //         Actions\DeleteAction::make(), // Action de suppression existante
    //     ];
    // }
}
